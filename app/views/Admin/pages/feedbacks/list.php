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
                                                <th class="text-center">Tiêu đề</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Mức độ</th>
                                                <th class="text-center" style="max-width: 500px !important; white-space: normal;">Nội dung phản hồi</th>
                                                <th class="text-center">Thời gian phản hồi</th>
                                            </tr>
                                        </thead>
                                        
                                            <?php
                                                foreach ($feedbacks as $feedback) {
                                                    extract($feedback);
                                                    echo '
                                                    <tbody>
                                                        <tr>
                                                            <td class="">'.$title.'</td>
                                                            <td class="">'.$email.'</td>
                                                            <td class="text-center">'.$feedback_level.'</td>
                                                            <td class="" style="max-width: 500px !important; white-space: normal;">'.$feedback_content.'</td>
                                                            <td class="text-center">'.$created_at.'</td>
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