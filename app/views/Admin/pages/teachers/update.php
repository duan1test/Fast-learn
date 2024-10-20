<?php

    if(is_array($teacher)){
        extract($teacher);
    }

?>

<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="">
                        <div class="card-header">
                            <h5 class="page-title mt-3 mb-3">Cập nhật giảng viên</h5>
                        </div>
                        <div class="card-body">
                            <form action="AdminController.php?action=update-teacher" method="post" id="form-update-user">
                                <div class="row mb-3">
                                    <input name="role_name" type="text" value="teacher" hidden>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Mã giảng viên
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="code" type="text" value="<?= $code ?>"
                                            class="form-control"
                                            placeholder="Mã giảng viên" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Mật khẩu
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input type="password" name="password" value="<?= $password ?>"
                                            class="form-control"
                                            placeholder="Mật khẩu" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Tên giảng viên
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="name" type="text" value="<?= $name ?>"
                                            class="form-control"
                                            placeholder="Tên giảng viên" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Xác nhận mật khẩu</label>
                                        <input name="confirm_password" type="password"
                                            class="form-control" value="<?= $password ?>"
                                            placeholder="Xác nhận mật khẩu">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Email
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="email" type="text" value="<?= $email ?>"
                                            class="form-control"
                                            placeholder="Email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Trạng thái
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <select name="active"
                                            class="form-select form-control choices" required>
                                        <option value="1" <?= $active == 1 ? 'selected' : '' ?> >Hoạt động</option>
                                        <option value="0" <?= $active == 0 ? 'selected' : '' ?> >Không hoạt động</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Điện thoại</label>
                                        <input name="phone" type="text" value="<?= $phone ?>"
                                            class="form-control"
                                            placeholder="Điện thoại">
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <input type="submit" name="update_teacher" value="Sửa" class="btn btn-primary py-2">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("form-update-user").addEventListener("submit", function(event) {
        var password = document.querySelector("input[name='password']").value;
        var confirmPassword = document.querySelector("input[name='confirm_password']").value;

        if (password !== confirmPassword) {
            alert("Mật khẩu và xác nhận mật khẩu không khớp!");
            event.preventDefault();
        }
    });
</script>
