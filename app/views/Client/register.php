<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
<div class="wrapper w-100">
        <div style="width: 100%;" class=" d-flex align-items-center justify-content-center mt-4">
            <div class="row" style="width: 50%;">
                <div class="col-12">
                    <div class="card radius-15 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-xl-12 d-flex justify-content-center align-items-center">
                                <div class="card-body p-5">
                                    <div class="text-center d-flex flex-column justify-content-center align-items-center">
                                        <div>
                                            <img style="width: 150px;" src="../../public/assets/images/logo.png" alt="">
                                        </div>                  
                                        <span class="fw-bold mt-2" style="font-size: 18px;">ĐĂNG KÝ TÀI KHOẢN</span>
                                    </div>
                                    <div class="">
                                        <div class="form-body">
                                        <form class="form-register" action="ClientController.php?action=register" method="POST">
                                            <?php
                                                if(isset($_COOKIE['error'])) {
                                                    $error = '<div class="content"><p style="color: red;text-align: center;">'.$_COOKIE['error'].'</p></div>';
                                                    echo $error;
                                                    unset($_COOKIE['error']); 
                                                }
                                            ?>
                                            <div class="content">
                                                <div>
                                                    <label for="role">Bạn là</label>
                                                    <select name="role_name" id="role" required>
                                                        <option selected value="student">Sinh viên</option>
                                                        <option value="teacher">Giảng viên</option>
                                                    </select>
                                                </div>

                                                <div>
                                                    <label class="form-label"> Email <span class="text-danger" style="color: red; margin-top: 5px;"> *</span></label>
                                                    <input name="email" type="text" value="" class="form-control" placeholder="Email" required>
                                                </div>

                                                <div>
                                                    <label class="form-label"> Tên <span class="text-danger" style="color: red; margin-top: 5px;"> *</span></label>
                                                    <input name="name" type="text" value="" class="form-control" placeholder="Tên" required>
                                                </div>
                                                
                                                <div>
                                                    <label class="form-label"> Mật khẩu <span class="text-danger" style="color: red; margin-top: 5px;"> *</span>
                                                    </label>
                                                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu" required>
                                                </div>

                                                <div>
                                                    <label class="form-label">Xác nhận mật khẩu</label>
                                                    <input name="confirm_password" type="password" class="form-control" placeholder="Xác nhận mật khẩu" required>
                                                </div>

                                                <div class="button">
                                                    <button type="submit" class="button" name="register">Đăng ký</button>
                                                </div>

                                                <div class="button">
                                                    <a style="text-decoration: none;" href="ClientController.php?action=login">Quay lại đăng nhập !</a>
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
    
</body>

</html>