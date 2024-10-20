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
                                        <h5 class="h4">Danh sách phản hồi</h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="table-responsive mt-3">
                                    <table class="table table-striped table-bordered table-border mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">Tên khóa học</th>
                                                <th class="text-center">Câu truy vấn</th>
                                                <th class="text-center">Người hỏi</th>
                                                <th class="text-center">Thao tác</th>
                                            </tr>
                                        </thead>
                                        
                                            <?php
                                                foreach ($courses as $course) {
                                                    extract($course);
                                                    echo '
                                                    <tbody>
                                                        <tr>
                                                            <td class="">'.$name.'</td>
                                                            <td class="" style="max-width: 500px !important; white-space: normal;">'.$message.'</td>
                                                            <td class="" style="">'.$user_name.'</td>
                                                            <td class="text-center">'.$created_at.'</td>
                                                            <td class="text-center">
                                                                <a href="AdminController.php?action=comments-list-student&course_id='.$id.'"><i class="fa-solid fa-arrow-right"></i></a>
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