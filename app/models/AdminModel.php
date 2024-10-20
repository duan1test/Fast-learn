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
    
    function commentStore($courseId, $userId, $child, $message, $comment_id) {
        if ($child == true) {
            $sql = "insert into comments(course_id, user_id, message, parent_id) 
                VALUES('$courseId','$userId', '$message', '$comment_id')";
        } else {
            $sql = "insert into comments(course_id, user_id, message) 
                VALUES('$courseId','$userId', '$message')";
        }
        pdo_execute($sql);
    }

    function getListPost() 
    {
        $sql = "select * from posts";
        $posts = pdo_query($sql);
        return $posts;
    }

    function createPost($title, $tag, $title_child, $content, $content_1, $content_2, $content_3, $content_4, $content_5)
    {
        $sql = "INSERT INTO posts (title, tag, title_child, content, content_1, content_2, content_3, content_4, content_5) VALUES ('$title', '$tag', '$title_child', '$content', '$content_1', '$content_2', '$content_3', '$content_4', '$content_5')";
        pdo_execute($sql);
    }

    function getDashboard()
    {
        $sql = "select * from posts";
        $posts = pdo_query($sql);
        return $posts;
    }

    function getPost($id)
    {
        $sql = "select * from posts where id=" . $id;
        $post = pdo_query_one($sql);
        return $post;
    }

    function updateViewer($id)
    {
        $post = getPost($id);
        $view = $post['viewer'] + 1;
        $sql = "UPDATE posts SET viewer= '$view' WHERE id= $id";
        pdo_execute($sql);
    }

    function getListFeedBack()
    {
        $sql = "SELECT * FROM feedbacks";
        $feedbacks = pdo_query($sql);
        return $feedbacks;
    }

    function updatePost($id, $title, $tag, $title_child, $content, $content_1, $content_2, $content_3, $content_4, $content_5)
    {
        $sql = "UPDATE posts
            SET 
                title = '$title',
                tag = '$tag',
                title_child = '$title_child',
                content = '$content',
                content_1 = '$content_1',
                content_2 = '$content_2',
                content_3 = '$content_3',
                content_4 = '$content_4',
                content_5 = '$content_5'
            WHERE id = $id;
        ";
        pdo_execute($sql);
    }

    function deletePost($id)
    {
        $sql = "DELETE FROM posts WHERE id='$id'";
        pdo_execute($sql);
    }

    function createFeedback($title, $email, $feedback_level, $feedback_content)
    {
        $now = date("Y-m-d",time());
        $sql = "INSERT INTO feedbacks (title, email, feedback_level, feedback_content, created_at) 
        VALUES ('$title', '$email', '$feedback_level', '$feedback_content', '$now')
        ";
        pdo_execute($sql);
    }

    function getCourseWithComment()
    {
        $sql = "SELECT comments.message, users.name as user_name, courses.name, comments.created_at, courses.id as id
            FROM comments
            JOIN courses ON comments.course_id = courses.id
            JOIN users ON comments.user_id = users.id
            WHERE courses.teacher_id = 7
            AND comments.parent_id IS NULL
            ORDER BY comments.id DESC;
        ";
        $courses = pdo_query($sql);
        return $courses;
    }
?>