<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="card-body">
                        <div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <h5 class="h4">Danh sách khoá học</h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-4">
                                <?php 
                                    if($_SESSION['user']['role_name'] == 'student') {
                                        echo '<h4 class="h5">Các khoá học hiện tại</h4>';
                                    } else {
                                        echo '<h4 class="h5">Các khoá học giảng dạy</h4>';
                                    }
                                ?>
                                
                            </div>

                            <div class="row mt-2">
                                <?php
                                    foreach ($courses as $course) {
                                        extract($course);
                                        if($_SESSION['user']['role_name'] == 'student') {
                                            $showCourseInUserUrl = "AdminController.php?action=course-detail-user&id=".$id;
                                        } else {
                                            $showCourseInUserUrl = "AdminController.php?action=edit-course&id=".$id;
                                        }

                                        // đang fix cứng cho student
                                        echo '
                                        <div class="col-4 mt-4">
                                            <div class="d-flex justify-content-center align-items-start" style="border: 1px solid #ccc; height: 338px; overflow: hidden;">
                                                <div class="d-flex flex-column mt-2 justify-content-between h-100">
                                                    <div class="w-100 d-flex flex-column">
                                                        <a href="'. $showCourseInUserUrl .'">
                                                            <img src="../../public/assets/images/gradation.jpg" alt="" style="max-width: 220px;">
                                                        </a>
                                                        <a href="'. $showCourseInUserUrl .'" style="font-size: 24px; color: #0d6cfd; max-width: 220px;">
                                                            '.$name.'
                                                        </a>
                                                        <div class="" style="font-size: 16px;">
                                                            <span class="fw-bold"> Giáo viên:</span>
                                                            <span>'. $teacher_name .'</span>
                                                        </div>
                                                        <div class="" style="font-size: 16px;">
                                                            <span class="fw-bold"> Thời lượng:</span>
                                                            <span>'. $course["duration"] .'</span>
                                                        </div>
                                                        <div class="" style="font-size: 16px; color: red;">
                                                            <span class="fw-bold"> Chi phí:</span>
                                                            <span>'. $course["price"] .'đ</span>
                                                        </div>
                                                    </div>';
                                                    if($_SESSION['user']['role_name'] == 'teacher') {
                                                        echo '<div class="" style="padding-bottom: 20px;">
                                                        <a href="AdminController.php?action=comments-list-student&course_id='.$course["id"].'" class="btn btn-primary mt-2" style="border-radius: 30px;">
                                                            Diễn dàn trao đổi
                                                            <i class="fa-solid fa-arrow-right ms-2"></i>
                                                        </a>
                                                    </div>';
                                                    }

                                                echo '</div>
                                            </div>
                                        </div>';
                                    }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>