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
                                    <h5 class="h4">Danh sách sinh viên</h5>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <div class="fl-right inline-blk">
                                        <a title="Tạo mới"
                                            class="btn btn-success btn-item text-white"
                                            href="AdminController.php?action=create-student"><i
                                                class='fas fa-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive mt-3">
                                <table class="table table-striped table-bordered table-border mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">Mã sinh viên</th>
                                            <th class="text-center">Tên sinh viên</th>
                                            <th class="text-center">Lớp</th>
                                            <th class="text-center">Ngành học</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Tình trạng</th>
                                            <th class="text-center w-action">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        foreach ($students as $student) {
                                            extract($student);
                                            $editStudent = "AdminController.php?action=edit-student&id=".$id;
                                            $deleteStudent = "AdminController.php?action=delete-student&id=".$id;
                                            echo '
                                                <tr>
                                                    <td class="text-center">'.$code.'</td>
                                                    <td class="text-center">'.$name.'</td>
                                                    <td class="text-center">'.$class.'</td>
                                                    <td class="text-center">'.$specialized.'</td>
                                                    <td class="text-center">'.$email.'</td>
                                                    <td class="text-center">'.$active_status.'</td>
                                                    <td class="text-center">
                                                        <a href="'.$editStudent.'"><i class="bx bx-edit-alt event-stop"></i></a>
                                                        <a href="'.$deleteStudent.'"><i class="bx bx-trash"></i></a>
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
</body>