<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="">
                        <div class="card-header">
                            <h5 class="page-title mt-3 mb-3">Cập nhật sinh viên</h5>
                        </div>
                        <div class="card-body">
                            <form action="AdminController.php?action=create-student" method="post" id="form-create-user">
                                <div class="row mb-3">
                                    <input name="role_name" type="text" value="student" hidden>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Mã sinh viên
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="code" type="text" value=""
                                            class="form-control"
                                            placeholder="Mã sinh viên" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Ngày bắt đầu học</label>
                                        <input name="dateStart" type="datetime-local" value=""
                                            class="form-control"
                                            placeholder="Ngày bắt đầu học">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Tên sinh viên
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="name" type="text" value=""
                                            class="form-control"
                                            placeholder="Tên sinh viên" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Mật khẩu
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input type="password" name="password"
                                            class="form-control"
                                            placeholder="Mật khẩu" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Lớp
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="class" type="text" value=""
                                            class="form-control"
                                            placeholder="Lớp" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Xác nhận mật khẩu</label>
                                        <input name="confirm_password" type="password"
                                            class="form-control"
                                            placeholder="Xác nhận mật khẩu">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Email
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="email" type="text" value=""
                                            class="form-control"
                                            placeholder="Email" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Chuyên ngành
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="specialized" type="text" value=""
                                            class="form-control"
                                            placeholder="Chuyên ngành" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Điện thoại</label>
                                        <input name="phone" type="text" value=""
                                            class="form-control"
                                            placeholder="Điện thoại">
                                    </div>

                                </div>
                                <div class="row mb-3"> 
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Trạng thái
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <select name="active"
                                            class="form-select form-control choices" required>
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Không hoạt động</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="card-footer">
                                    <div class="text-end">
                                        <input type="submit" name="create_student" value="Tạo" class="btn btn-primary py-2">
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
    document.getElementById("form-create-user").addEventListener("submit", function(event) {
        var password = document.querySelector("input[name='password']").value;
        var confirmPassword = document.querySelector("input[name='confirm_password']").value;

        if (password !== confirmPassword) {
            alert("Mật khẩu và xác nhận mật khẩu không khớp!");
            event.preventDefault();
        }
    });
</script>
