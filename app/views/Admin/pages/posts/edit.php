<?php
    if(is_array($post)){
        extract($post);
    }
?>
<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="">
                        <div class="card-header">
                            <h5 class="page-title mt-3 mb-3">Cập nhật bài đăng</h5>
                        </div>
                        <form method="POST" id="form-create" action="AdminController.php?action=edit-post" style="display: contents;" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="input-container">
                                            <label for="title" class="form-label">
                                                Tiêu đề chính
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="title" class="form-control" value="<?= $title ?>" placeholder="Tiêu đề chính" name="title">
                                            <input type="text" value="<?= $id ?>" hidden name="id">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="input-container">
                                            <label for="tag" class="form-label">
                                                Tag
                                            </label>
                                            <input type="text" value="<?= $tag ?>" id="tag" class="form-control" placeholder="Tag" name="tag">
                                        </div>
                                    </div>

                                    <div class="input-container">
                                        <label for="title_child" class="form-label">
                                            Tiêu đề phụ
                                        </label>
                                        <textarea name="title_child" id="title_child" class="form-control"><?= $title_child ?></textarea>
                                    </div>

                                    <div class="input-container">
                                        <label for="content" class="form-label">
                                            Nội dung bài đăng
                                        </label>
                                        <textarea name="content" id="content" class="form-control"><?= $content ?></textarea>
                                    </div>

                                    <div class="input-container">
                                        <label for="content_1" class="form-label">
                                            Nội dung bài đăng phần 1
                                        </label>
                                        <textarea name="content_1" id="content_1" class="form-control"><?= $content_1 ?></textarea>
                                    </div>

                                    <div class="input-container">
                                        <label for="content_2" class="form-label">
                                            Nội dung bài đăng phần 2
                                        </label>
                                        <textarea name="content_2" id="content_2" class="form-control"><?= $content_2 ?></textarea>
                                    </div>

                                    <div class="input-container">
                                        <label for="content_3" class="form-label">
                                            Nội dung bài đăng phần 3
                                        </label>
                                        <textarea name="content_3" id="content_3" class="form-control"><?= $content_3 ?></textarea>
                                    </div>

                                    <div class="input-container">
                                        <label for="content_4" class="form-label">
                                            Nội dung bài đăng phần 4
                                        </label>
                                        <textarea name="content_4" id="content_4" class="form-control"><?= $content_4 ?></textarea>
                                    </div>

                                    <div class="input-container">
                                        <label for="content_5" class="form-label">
                                            Nội dung bài đăng phần 5
                                        </label>
                                        <textarea name="content_5" id="content_5" class="form-control"><?= $content_5 ?></textarea>
                                    </div>

                                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input-container">
                                            <label for="formFile" class="form-label">
                                                File đính kèm
                                            </label>
                                            <input type="file" class="filepond hidden" name="filepond" multiple>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-end m-3">
                                    <input type="submit" name="edit_post" value="Tạo" class="btn btn-primary text-capitalize"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>