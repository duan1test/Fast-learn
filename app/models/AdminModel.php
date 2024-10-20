<?php
    //student model
    function getListStudent() {
        $sql = "select * from users where role_name = 'student' order by id desc";
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
    function deleteUser($id){
        $sql = "delete from users where id=".$id;
        pdo_execute($sql);
    }
    function showUser($id){
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

    // teacher model
    function getListTeacher() {
        $sql = "select * from users where role_name = 'teacher' order by id desc";
        $teachers = pdo_query($sql);
        foreach ($teachers as &$teacher) {
            if ($teacher['active'] == 1) {
                $teacher['active_status'] = 'Hoạt động';
            } else {
                $teacher['active_status'] = 'Không hoạt động';
            }
        }
        return $teachers;
    }
    function createTeacher($code,$name,$role_name,$email,$phone,$password,$active){
        $sql = "insert into users(code,name,role_name,phone,active,email,password) 
                VALUES('$code','$name','$role_name','$phone','$active','$email','$password')";
        pdo_execute($sql);
    }
    function updateTeacher($id,$code,$name,$role_name,$email,$phone,$password,$active){
        $sql = "update users set code = '$code' ,name = '$name' ,role_name = '$role_name' ,email = '$email' ,
        phone = '$phone' ,password = '$password' ,active = '$active' where id=".$id;
        pdo_execute($sql);
    }

    //course model
    function getListTeacherById($id) {
        $sql = "select users.name from users where id=".$id;
        $name = pdo_query_one($sql);
        return $name['name'];
    }

    function getListCourses(){
        $sql = "select * from courses order by id desc";
        $courses = pdo_query($sql);
        foreach ($courses as &$course) {
            $course['teacher_name'] = getListTeacherById($course['teacher_id']);
            $course['category_name'] = getListTeacherById($course['category_id']);
        }
        return $courses;
    }
    function getCategoryById($id) {
        $sql = "select categories.name from categories where id=".$id;
        $name = pdo_query_one($sql);
        return $name['name'];
    }
    function getListCategories(){
        $sql = "select * from categories";
        $categories= pdo_query($sql);
        return $categories;
    }
    
    function createCourse($code,$name,$price,$dateCreate,$description,$note,$file,$teacher_id,$category_id,$duration){
        $sql = "insert into courses(code,name,price,dateCreate,description,note,file,teacher_id,category_id,duration) 
                VALUES('$code','$name','$price','$dateCreate','$description','$note','$file','$teacher_id','$category_id','$duration')";
        pdo_execute($sql);
    }

    function showCourse($id){
        $sql = "select * from courses where id=".$id;
        $course = pdo_query_one($sql);
        return $course;
    }

    function updateCourse($id,$code,$name,$price,$dateCreate,$description,$note,$file,$teacher_id,$category_id,$duration){
        $sql = "update courses set code = '$code' ,name = '$name' ,price = '$price' ,dateCreate = '$dateCreate' ,
        description = '$description' ,note = '$note' ,file = '$file',teacher_id = '$teacher_id',category_id = '$category_id',duration = '$duration' where id=".$id;
        // var_dump($sql); die;
        pdo_execute($sql);
    }

    function deleteCourse($id){
        $sql = "delete from courses where id=".$id;
        pdo_execute($sql);
    }
?>