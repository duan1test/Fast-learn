<style>
    .truncate-3-lines {
      display: -webkit-box;
      -webkit-line-clamp: 3; /* Hiển thị tối đa 3 dòng */
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
    }
</style>

<!--main-->
<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15" style="border-radius:4px !important; max-width: 1200px;">
                    <div class="card-body">
                        <div class="row">
                            <h4 class="h4">
                                Tin hoạt động
                            </h4>
                        </div>
                        <div class="row">
                            <?php
                                foreach ($posts as $post) {
                                    extract($post);
                                    $postDetail = "AdminController.php?action=post-detail&id=" . $id;
                                    echo '
                                    <div class="col-6 mt-4">
                                        <div class="d-flex flex-row">
                                            <img src="../../public/img/logo.png" alt="" style="width: 100px; height: 77px;">
                                            <div class="d-flex flex-column">
                                                <a href="'.$postDetail.'" class="h5" style="color: #0d6cfd;">
                                                    '.$title.'
                                                </a>
                                                <span class="truncate-3-lines">'.$title_child.'</span>
                                            </div>
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
<!--start overlay-->
<div class="overlay toggle-btn-mobile"></div>
<!--end overlay-->
<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top">
    <i class='bx bxs-up-arrow-alt'></i>
</a>
<!--End Back To Top Button-->
</div>
<!-- end wrapper -->

</body>