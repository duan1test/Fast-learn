<?php
    session_start();
    if(isset($_COOKIE['success'])) {
        $success = "<script type='text/javascript'>alert('".$_COOKIE['success']."');</script>";
        echo $success;
    } 
    include '../models/pdo.php';
    include '../models/AdminModel.php';
    include '../views/Admin/header/header.php';
    include '../views/Admin/sidebar/sidebar-horizontal.php';
    include '../views/Admin/sidebar/sidebar-vertical.php';
    
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        switch ($action) {
            case 'list-student':
                $students = getListStudent();
                include '../views/Admin/pages/students/list-student.php';
                break;
            case 'create-student':
                if(isset($_POST['create_student'])&&($_POST['create_student'])){
                    $code = $_POST['code'];
                    $name = $_POST['name'];
                    $role_name = $_POST['role_name'];
                    $class = $_POST['class'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $dateStart = $_POST['dateStart'];
                    $password = md5($_POST['password']);
                    $specialized = $_POST['specialized'];
                    $role = $_POST['role'];
                    $active = $_POST['active'];
                    createStudent($code,$name,$role_name,$class,$email,$phone,$dateStart,$password,$specialized,$active);
                }
                include '../views/Admin/pages/students/create-student.php';
                break;
            default:
                include '../views/Admin/home/home.php';
                break;
        }
    }else{
        include '../views/Admin/home/home.php';
    }
    include '../views/Admin/footer/footer.php';

?>