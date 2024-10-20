<?php

function login($data) 
{	

    $sql = "select * from users where email='".$data['email']."' and password='".$data['password']."'";
    $user = pdo_query_one($sql);
    
	if($user){
        unset($user['password']);
        unset($_SESSION["user"]);
		$_SESSION["loged"] = true;
        $_SESSION["user"]= $user;

        header("location:AdminController.php?action=home");
        setcookie("success", "Đăng nhập thành công!", time()+1, "/","", 0);
	}
	else{
		header("location:ClientController.php?action=login");
		setcookie("error", "Đăng nhập không thành công, Kiểm tra lại email hoặc mật khẩu!", time()+1, "/","", 0);
	}
}

function register($name, $role_name, $email, $password, $confirm_password)
{
    if ($password == $confirm_password) {
        if (checkEmail($email)) {
            $password = md5($password);
            $dateStart = date('Y-m-d');
            $sql = "insert into users(code,name,role_name,class,specialized,phone,active,dateStart,email,password) 
                    VALUES('','$name','$role_name','','','','1','$dateStart','$email','$password')";
            pdo_execute($sql);
            header("location:ClientController.php?action=login");
            setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);
        }else{
            header("location:ClientController.php?action=register");
	        setcookie("error", "Email $email đã được đăng ký!", time()+1, "/","", 0);
        }
    }else{
        header("location:ClientController.php?action=register");
	    setcookie("error", "Mật khẩu và xác nhận mật khẩu không giống nhau !", time()+1, "/","", 0);
    }
}

function checkEmail($email){
    $sql = "select * from users where email = '$email'";
    $user = pdo_query_one($sql);
    if ($user) {
        return false;
    }
    return true;
}
