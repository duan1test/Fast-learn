<header class="top-header">
                <nav class="navbar navbar-expand" style="background-color: #1A72B9;">
                    <div class="left-topbar d-flex align-items-center">
                        <a href="javascript:;" class="toggle-btn text-white"> <i class="bx bx-menu"></i>
                        </a>
                    </div>
                    <div class="right-topbar ms-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item search-btn-mobile">
                                <a class="nav-link position-relative" href="javascript:;"> <i
                                        class="bx bx-search vertical-align-middle"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-user-profile">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                    data-bs-toggle="dropdown">
                                    <div class="d-flex user-box align-items-center">
                                        <div class="user-info">
                                            <p class="user-name mb-0 text-white"><?=$_SESSION["user"]["name"] ?></p>
                                        </div>
                                        <img src="../../public/assets/images/default_avatar.png" class="user-img" alt="" />
                                    </div>
                                </a>
                                <div>
                                    <a href="">Quản lý tài khoản</a>
                                    <a href="ClientController.php?action=logout">Đăng xuất</a>
                               </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>