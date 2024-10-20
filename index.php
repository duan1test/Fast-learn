<?php
    session_start();
    include 'app/models/ClientModel.php';
    include 'app/models/pdo.php';
    include 'app/views/Client/header.php';

    if(isset($_GET['action'])){
        $action = $_GET['action'];
        switch ($action) {
            case 'login':
                if(isset($_POST['login'])){
                    $data = [];
                    $data['email'] = $_POST['email'];
                    $data['password'] = md5($_POST['password']);
                    login($data);
                }
                include 'app/views/Client/login.php';
                break;
            case 'logout':
                unset($_SESSION['user']);
                include 'app/views/Client/login.php';
                break;
            case 'register':
                if(isset($_POST['register'])){
                    $name = $_POST['name'];
                    $role_name = $_POST['role_name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $confirm_password = $_POST['confirm_password'];
                    register($name,$role_name,$email,$password,$confirm_password);
                }
                include 'app/views/Client/register.php';
                break;
            default:
                include 'app/views/Client/login.php';
                break;
        }
    }else{
        // include 'app/views/Client/register.php';
        include 'app/views/Client/login.php';
    }
?>