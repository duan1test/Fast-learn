<style>

.filepond-drop-area {
    border: 2px dashed #ccc;     
    border-radius: 8px;         
    padding: 20px;              
    text-align: center;          
    cursor: pointer;             
    transition: background-color 0.3s ease; 
}


.filepond-drop-text {
    color: #555;               
    font-size: 16px;             
    font-weight: 500;            
}

.filepond-drop-text span {
    color: #007bff;              
    text-decoration: underline;   
    cursor: pointer;             
}


.filepond-drop-area:hover {
    background-color: #f9f9f9;   
    border-color: #007bff;       
}

.filepond-drop-area:focus-within {
    outline: none;
    border-color: #007bff;       
}

input[type="file"][hidden] {
    display: none !important;
}
</style>
<?php

if(is_array($course)){
    extract($course);
}

?>
<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="">
                        <div class="card-header">
                            <h5 class="page-title mt-3 mb-3">Cập nhật khóa học</h5>
                        </div>
                        <form method="POST" id="form-create" action="AdminController.php?action=update-course" style="display: contents;" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">   
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="input-container">
                                            <label for="code" class="form-label">
                                                Mã khóa học
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" id="code" class="form-control" value="<?= $code ?>" placeholder="Mã khóa học" name="code" required>
                                            
                                        </div>

                                        <div class="input-container">
                                            <label for="name" class="form-label">
                                                Tên khóa học
                                            </label>
                                            <input type="text" value="<?= $name ?>" id="name" class="form-control" placeholder="Tên khóa học" name="name">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="input-container">
                                            <label for="date" class="form-label">
                                                Ngày bắt đầu
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="datetime-local" id="date" class="form-control" value="<?= $dateCreate ?>" placeholder="Ngày bắt đầu" name="dateCreate" required>
                                        </div>

                                        <div class="input-container">
                                            <label for="ref" class="form-label">
                                                Giảng viên
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select name="teacher_id"
                                                class="form-select form-control choices" required>
                                                    <?php
                                                    foreach ($teachers as $teacher) {
                                                    ?>
                                                        <option value="<?= $teacher_id ?>" <?= $teacher_id == $teacher['id'] ? 'selected' : '' ?> ><?= $teacher['name'] ?></opt>
                                                    <?php
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="input-container">
                                            <label for="duration" class="form-label">
                                                Thời lượng
                                            </label>
                                            <input type="text" value="<?= $duration ?>" id="duration" class="form-control" placeholder="Thời lượng" name="duration">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="input-container">
                                            <label for="price" class="form-label">
                                                Giá tiền
                                            </label>
                                            <input type="text" value="<?= $price ?>" id="price" class="form-control" placeholder="Thời lượng" name="price">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="input-container">
                                            <label for="price" class="form-label">
                                                Danh mục
                                            </label>
                                            <select name="category_id"
                                                class="form-select form-control choices">
                                                <?php
                                                    foreach ($categories as $category) {
                                                    ?>
                                                        <option value="<?= $category_id ?>" <?= $category_id == $category['id'] ? 'selected' : '' ?> ><?= $category['name'] ?></opt>
                                                    <?php
                                                    }
                                                    ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="input-container">
                                            <label for="note" class="form-label">
                                                Ghi chú
                                            </label>
                                            <input type="text" value="<?= $note ?>" id="note" class="form-control" placeholder="Ghi chú" name="note">
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="input-container">
                                        <label for="attachments" class="form-label">
                                            Tài liệu khóa học
                                        </label>
                                        <div class="filepond-drop-area">
                                            <?php if (!empty($file)) : ?>
                                                <div class="filepond-file-list">
                                                    <a href="uploads/<?= $file ?>" download><?= $file ?></a> <!-- Hiển thị liên kết để tải tệp xuống -->
                                                </div>
                                            <?php else : ?>
                                                <p>Không có dữ liệu được tải lên</p>
                                                <input type="file" id="attachments" name="file" multiple hidden>
                                                <label for="attachments" class="filepond-drop-label">
                                                    <div class="filepond-drop-text"><span>Chọn tài liệu</span> hoặc kéo thả<br>Bạn có thể chọn tệp .png, .jpg, .docx, .xlsx & .zip</div>
                                                </label>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                        <div class="input-container">
                                            <label for="description" class="form-label">
                                                Mô tả
                                            </label>
                                            <textarea name="description" id="description" class="form-control"><?= $description ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-end m-3">
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                    <input type="submit" name="update_course" value="Lưu" class="btn btn-primary text-capitalize">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>