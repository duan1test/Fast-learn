<?php
    session_start();
    include '../models/ClientModel.php';
    include '../models/pdo.php';
    include '../views/Client/header.php';

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
                include '../views/Client/login.php';
                break;
            case 'logout':
                unset($_SESSION['user']);
                include '../views/Client/login.php';
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
                include '../views/Client/register.php';
                break;
            default:
                include '../views/Client/login.php';
                break;
        }
    }else{
        header("Location: ClientController.php?action=login");
    }
?>