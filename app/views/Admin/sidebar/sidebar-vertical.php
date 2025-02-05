<body>
        <!-- wrapper -->
        <div class="wrapper">
            <!--sidebar-wrapper-->

            <div class="sidebar-wrapper" data-simplebar="true" style="background-color: #1A72B9;">
                <div class="sidebar-header" style="background-color: #1A72B9;">
                    <div>
                        <a href="#">
                            <h4 class="logo-text text-white">Fast Learn</h4>
                        </a>
                    </div>
                    <a href="javascript:;" class="toggle-btn ms-auto text-white"> <i class="bx bx-menu"></i>
                    </a>
                </div>
                <!--navigation-->
                <ul class="metismenu invisible" id="menu">
                    <li>
                        <a href="AdminController.php?action=home" class="">
                            <div class="parent-icon">
                                <i class="fa-solid fa-house text-white"></i>
                            </div>
                            <div class="menu-title text-white">Trang chủ</div>
                        </a>
                    </li>

                     <?php if ($_SESSION["user"]["role_name"] == 'admin') { ?>
                         <li>
                             <a href="javascript:;" class="has-arrow">
                                 <div class="parent-icon">
                                     <i class="fa-regular fa-address-card text-white"></i>
                                 </div>
                                 <div class="menu-title text-white">Quản lý hồ sơ</div>
                             </a>
                             <ul style="background-color: unset;">
                                 <li>
                                     <a href="AdminController.php?action=list-student" class="text-white">
                                         <i class="bx bx-right-arrow-alt"></i>
                                         Quản lý sinh viên
                                     </a>
                                 </li>
                                 <li>
                                 <a href="AdminController.php?action=list-teacher" class="text-white">
                                         <i class="bx bx-right-arrow-alt"></i>
                                         Quản lý giảng viên
                                     </a>
                                 </li>
                             </ul>
                         </li>
                    <?php } ?>

                    <?php if ($_SESSION["user"]['role_name'] == 'admin') { ?>
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon">
                                    <i class="fa-solid fa-school text-white"></i>
                                </div>
                                <div class="menu-title text-white">Chương trình học</div>
                            </a>
                            <ul style="background-color: unset;">
                                <li>
                                    <a href="AdminController.php?action=list-course" class="text-white">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        Quản lý khoá học
                                    </a>
                                </li>
                                <li>
                                    <a href="AdminController.php?action=create-course" class="text-white">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        Tạo khoá học
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>
                    
                    <?php if ($_SESSION["user"]['role_name'] == 'admin') { ?>
                        <li>
                            <a href="javascript:;" class="has-arrow">
                                <div class="parent-icon">
                                    <i class="fa-solid fa-solar-panel text-white"></i>
                                </div>
                                <div class="menu-title text-white">Hệ thống</div>
                            </a>
                            <ul style="background-color: unset;">
                                <li>
                                    <a href="AdminController.php?action=list-post" class="text-white">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        Bài đăng
                                    </a>
                                </li>
                                <li>
                                    <a href="AdminController.php?action=list-feedback" class="text-white">
                                        <i class="bx bx-right-arrow-alt"></i>
                                        Phản hồi
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>

                    <!-- Đăng ký khóa học -->
                    <?php if ($_SESSION["user"]['role_name'] == 'student') { ?>
                        <li>
                            <a href="AdminController.php?action=list-student-course" class="">
                                <div class="parent-icon">
                                    <i class="fa-solid fa-graduation-cap text-white"></i>
                                </div>
                                <div class="menu-title text-white">Đăng ký khóa học</div>
                            </a>
                        </li>
                        
                        <!-- Các khóa học đã đăng ký -->
                        <li>
                            <a href="AdminController.php?action=list-student-course-registed" class="">
                                <div class="parent-icon">
                                    <i class="icon fa fa-tachometer fa-fw  text-white"></i>
                                </div>
                                <div class="menu-title text-white">Các khóa học của tôi</div>
                            </a>
                        </li>
                            <li>
                                <a href="AdminController.php?action=create-feedback" class="">
                                    <div class="parent-icon">
                                    <i class="fa-regular fa-comments text-white"></i>
                                    </div>
                                    <div class="menu-title text-white">Gửi phản hồi</div>
                                </a>
                        </li>
                    </li>
                    <?php } ?>

                    <?php if ($_SESSION["user"]['role_name'] == 'teacher') { ?>
                        <li>
                            <a href="AdminController.php?action=list-student-course" class="">
                                <div class="parent-icon">
                                    <i class="fa-solid fa-graduation-cap text-white"></i>
                                </div>
                                <div class="menu-title text-white">Khóa học giảng dạy</div>
                            </a>
                        </li>
                    <?php } ?>

                    <?php if ($_SESSION["user"]['role_name'] == 'teacher') { ?>
                        <li>
                            <a href="AdminController.php?action=list-comment" class="">
                                <div class="parent-icon">
                                    <i class="fa-solid fa-code-pull-request text-white"></i>
                                </div>
                                <div class="menu-title text-white">Danh sách truy vấn</div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
