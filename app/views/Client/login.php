<?php
    if(isset($_COOKIE['success'])) {
        $success = "<script type='text/javascript'>alert('".$_COOKIE['success']."');</script>";
        echo $success;
        unset($_COOKIE['success']); 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="section-authentication-login d-flex align-items-center justify-content-center mt-4">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card radius-15 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-xl-12 d-flex justify-content-center align-items-center">
                                <div class="card-body p-5">
                                    <div class="text-center d-flex flex-column justify-content-center align-items-center">
                                        <div>
                                            <img style="width: 150px;" src="public/assets/images/logo.png" alt="">
                                        </div>                  
                                        <span class="fw-bold mt-2" style="font-size: 18px;">ĐĂNG NHẬP TÀI KHOẢN</span>
                                    </div>
                                    <div class="">
                                        <div class="form-body">
                                            <form class="row g-3" method="POST" action="app/controllers/ClientController.php?action=login">
                                            <?php
                                                if(isset($_COOKIE['error'])) {
                                                    $error = '<div class="content"><p style="color: red;text-align: center;">'.$_COOKIE['error'].'</p></div>';
                                                    echo $error;
                                                    unset($_COOKIE['error']); 
                                                } 
                                            ?>

                                            <div class="content">
                                                <div>
                                                    <div>
                                                        <label for="email">Email</label>
                                                    </div>
                                                    <input type="email" name="email" id="email" placeholder="Nhập email của bạn" required>
                                                </div>

                                                <div>
                                                    <div>
                                                        <label for="password">Mật khẩu</label>
                                                    </div>
                                                    <input type="password" name="password" id="password" placeholder="Nhập mật khẩu của bạn" required>
                                                </div>
                                            </div>

                                            <div class="button">
                                                <button type="submit" class="button" name="login">Đăng nhập</button>
                                            </div>

                                            <div style="text-align: center;">
                                                <span>Bạn chưa có tài khoản.</span>
                                                <a style="text-decoration: none;" href="ClientController.php?action=register">Đăng ký ngay !</a>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>