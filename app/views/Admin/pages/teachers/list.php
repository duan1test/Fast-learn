       <!--main-->
       <div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="card-body">
                        <div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <h5 class="h4">Danh sách giảng viên</h5>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <div class="fl-right inline-blk">
                                        <a title="Tạo mới"
                                            class="btn btn-success btn-item text-white"
                                            href="AdminController.php?action=create-teacher"><i
                                                class='fas fa-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive mt-3">
                                <table class="table table-striped table-bordered table-border mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">Mã giảng viên</th>
                                            <th class="text-center">Tên giảng viên</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Điện thoại</th>
                                            <th class="text-center">Tình trạng</th>
                                            <th class="text-center w-action">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        foreach ($teachers as $teacher) {
                                            extract($teacher);
                                            $editTeacher = "AdminController.php?action=edit-teacher&id=".$id;
                                            $deleteTeacher = "AdminController.php?action=delete-teacher&id=".$id;
                                            echo '
                                                <tr>
                                                    <td class="text-center">'.$code.'</td>
                                                    <td class="text-center">'.$name.'</td>
                                                    <td class="text-center">'.$email.'</td>
                                                    <td class="text-center">'.$phone.'</td>
                                                    <td class="text-center">'.$active_status.'</td>
                                                    <td class="text-center">
                                                        <a href="'.$editTeacher.'" class="px-2 btn hover-color hover-warning event-stop" ><i class="bx bx-edit-alt event-stop"></i></a>
                                                        <a href="'.$deleteTeacher.'" class="px-2 btn hover-color hover-warning event-stop" ><i class="bx bx-trash"></i></a>
                                                    </td>
                                                </tr>';
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>