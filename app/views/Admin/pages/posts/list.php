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
                                        <h5 class="h4">Danh sách bài đăng</h5>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end">
                                        <div class="fl-right inline-blk">
                                            <a title="Tạo mới"
                                                class="btn btn-success btn-item text-white"
                                                href="AdminController.php?action=create-post"><i
                                                    class='fas fa-plus'></i></a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-2">
                                    <div class="col-md-3">
                                        <input type="text" name="filter_user" id="filter_user" class="form-control filters" placeholder="Tìm kiếm nhanh">
                                    </div>
                                </div>
                                <div class="table-responsive mt-3">
                                    <table class="table table-striped table-bordered table-border mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">Tiêu đề</th>
                                                <th class="text-center">Tag</th>
                                                <th class="text-center">Lượt xem</th>
                                                <th class="text-center">Ngày tạo</th>
                                                <th class="text-center">Thao tác</th>
                                            </tr>
                                        </thead>
                                        
                                            <?php
                                                foreach ($posts as $post) {
                                                    extract($post);
                                                    $editStudent = "AdminController.php?action=edit-post&id=".$id;
                                                    $deleteStudent = "AdminController.php?action=delete-post&id=".$id;
                                                    echo '
                                                    <tbody>
                                                        <tr>
                                                            <td class="">'.$title.'</td>
                                                            <td class="">'.$tag.'</td>
                                                            <td class="text-center">'.$viewer.'</td>
                                                            <td class="text-center">'.$created_at.'</td>
                                                            <td class="text-center">
                                                                <a href="'.$editStudent.'"><i class="bx bx-edit-alt event-stop"></i></a>
                                                                <a href="'.$deleteStudent.'"><i class="bx bx-trash btn-delete" data-id='.$id.'></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>';
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

    