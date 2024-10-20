<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="card-body">
                        <div>
                            <div style="display: flex; justify-content: space-between;">
                                <div style="width: 50%;">
                                    <h2>Chinh sửa thông tin</h2>
                                    <p>Cập nhận thông tin hồ sơ tài khoản và địa chỉ email</p>
                                </div>
                                <div style="width: 50%;">
                                    <form action="AdminController.php?action=profile" method="POST">
                                        <input type="text" name="update_information" hidden>
                                        <div class="content">
                                            <div>
                                                <label for="">Tên</label>
                                                <input name="name" type="text" value="<?=$_SESSION['user']['name']?>">
                                            </div>
                                            <div>
                                                <label for="">Email</label>
                                                <input name="email" type="text" value="<?=$_SESSION['user']['email']?>">
                                            </div>
                                        </div>
                                        <button type="submit" style="border: solid 1px; border-radius: 8px; padding: 4px 8px;">Lưu</button>
                                    </form>
                                </div>
                            </div>     
                        </div>
                    </div>
                    
                </div>
                <div class="card radius-15">
                    <div class="card-body">
                        <div>
                            <div style="display: flex; justify-content: space-between;">
                                <div style="width: 50%;">
                                    <h2>Cập nhật mật khẩu</h2>
                                    <p>Đảm bảo tài khoản của bạn sử dụng mật khẩu dài, ngẫu nhiên để đảm bảo an toàn</p>
                                </div>
                                <div style="width: 50%;">
                                    <form action="AdminController.php?action=profile" method="POST">
                                        <?php
                                            if(isset($_COOKIE['error_password'])) {
                                                $error = '<div class="content"><p style="color: red;text-align: center;">'.$_COOKIE['error_password'].'</p></div>';
                                                echo $error;
                                                unset($_COOKIE['error_password']); 
                                            } 
                                        ?>
                                        <input type="text" name="update_password" hidden>
                                        <div class="content">
                                            <div>
                                                <label for="">Mật khẩu hiện tại</label>
                                                <input name="password" type="text">
                                            </div>
                                            <div>
                                                <label for="">Mật khẩu mới</label>
                                                <input name="new_password" type="text">
                                            </div>
                                            <div>
                                                <label for="">Xác nhận mật khẩu mới</label>
                                                <input name="confirm_new_password" type="text">
                                            </div>
                                        </div>
                                        <button type="submit" style="border: solid 1px; border-radius: 8px; padding: 4px 8px;">Lưu</button>
                                    </form>
                                </div>
                            </div>     
                        </div>
                    </div>
                    
                </div>
                <div class="card radius-15">
                    <div class="card-body">
                        <div>
                            <div style="display: flex; justify-content: space-between;">
                                <div style="width: 50%;">
                                    <h2>Xoá tài khoản</h2>
                                    <p>Tài khoản của bạn sẽ bị xóa vĩnh viễn</p>
                                </div>
                                <div style="width: 50%;">
                                    <form action="AdminController.php?action=profile" method="POST">
                                        <input type="text" name="delete_user" hidden>
                                        <p>Sau khi tài khoản của bạn bị xóa, tất cả tài nguyên và dữ liệu của tài khoản đó sẽ bị xóa vĩnh viễn. Trước khi xóa tài khoản, vui lòng tải xuống bất kỳ dữ liệu hoặc thông tin nào mà bạn muốn giữ lại.</p>
                                        <button type="submit" style="border: solid 1px; border-radius: 8px; padding: 4px 8px;">Xóa</button>
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