<?php
    function getListStudent() {
        $sql = "select * from users where role_name = 'student'";
        $students = pdo_query($sql);
        foreach ($students as &$student) {
            if ($student['active'] == 1) {
                $student['active_status'] = 'Hoạt động';
            } else {
                $student['active_status'] = 'Không hoạt động';
            }
        }
        return $students;
    }
    function createStudent($code,$name,$role_name,$class,$email,$phone,$dateStart,$password,$specialized,$active){
        $sql = "insert into users(code,name,role_name,class,specialized,phone,active,dateStart,email,password) 
                VALUES('$code','$name','$role_name','$class','$specialized','$phone','$active','$dateStart','$email','$password')";
        pdo_execute($sql);
    }
    function deleteStudent($id){
        $sql = "delete from users where id=".$id;
        pdo_execute($sql);
    }
    function showStudent($id){
        $sql = "select * from users where id=".$id;
        $student = pdo_query_one($sql);
        return $student;
    }
    function updateStudent($id,$code,$name,$role_name,$class,$email,$phone,$dateStart,$password,$specialized,$active){
        $sql = "update users set code = '$code' ,name = '$name' ,role_name = '$role_name' ,class = '$class' ,email = '$email' ,
        phone = '$phone' ,dateStart = '$dateStart' ,password = '$password' ,specialized = '$specialized',active = '$active' where id=".$id;
        pdo_execute($sql);
    }
    
    function checkExistEmail($email, $id) {
        $sql = "select * from users where email = '.$email.' and id = '.$id.'";
        pdo_query($sql);
    }
    
    // course-student
    function getListCourse() {
        $sql = "SELECT courses.*, users.name as teacher_name
                FROM courses
                JOIN users ON courses.teacher_id = users.id
                WHERE courses.deleted_at IS NULL
                ORDER BY courses.id DESC";
        $courses = pdo_query($sql);
        return $courses;
    }    

    function getCourseById($id) {
        $sql = "SELECT courses.*, categories.name AS category_name, users.name AS teacher_name
                FROM courses
                INNER JOIN categories ON courses.category_id = categories.id
                INNER JOIN users ON courses.teacher_id = users.id
                WHERE courses.id = ?";
        
        return pdo_query_one($sql, $id);
    }
    
    function registerCourse($courseId, $userId){
        $sql = "insert into course_user(course_id, user_id) 
                VALUES('$courseId','$userId')";
        pdo_execute($sql);
    }

    function isCourseRegisteredByUser($courseId, $userId) {
        $query = "SELECT * FROM course_user WHERE course_id = $courseId AND user_id = $userId";
        
        $stmt = pdo_query($query);
        
        if ($stmt) {
            return true; 
        }
        
        return false; 
    }    
    
    function getListCourseRegisted($userId) {
        $sql = "
            SELECT c.*, users.name AS teacher_name 
            FROM courses c
            JOIN course_user cu ON c.id = cu.course_id
            JOIN users ON c.teacher_id = users.id
            WHERE cu.user_id = ?
        ";
    
        return pdo_query($sql, $userId);
    }
    
    // comments
    function getCommentsByCourse($courseId) {
        $sql = "SELECT c.*, u.name as student_name FROM comments c
                JOIN users u ON c.user_id = u.id
                WHERE c.course_id = ? AND c.parent_id IS NULL";
    
        return pdo_query($sql, $courseId);
    }

    function getChildComments($parentId) {
        $sql = "SELECT c.*, u.name as student_name FROM comments c
                JOIN users u ON c.user_id = u.id
                WHERE c.parent_id = ?";
    
        return pdo_query($sql, $parentId);
    }

    function getCommentsWithChildren($courseId) {
        $comments = getCommentsByCourse($courseId);
        foreach ($comments as &$comment) {
            $comment['children'] = getAllChildComments($comment['id']);
        }
        return $comments;
    }
    
    function getAllChildComments($parentId) {
        $childComments = getChildComments($parentId);
        foreach ($childComments as &$child) {
            $child['children'] = getAllChildComments($child['id']);
        }
        return $childComments;
    }
    
    function commentStore($courseId, $userId, $child, $message) {
        if ($child == true) {
        } else {
            $sql = "insert into comments(course_id, user_id, message) 
                VALUES('$courseId','$userId', '$message')";
            pdo_execute($sql);
        }
    }
?>