<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-8">
                                <h4 class="h3" style="color: #0d6cfd;">
                                    <?php echo $course['name'] . ' - ' . $course['code']; ?>
                                </h4>
                                <p class="text-justify">
                                    <?php echo $course['description']; ?>
                                </p>

                                <table class="mt-3">
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold" style="width: 122px;">
                                                Thời gian tạo:
                                            </td>
                                            <td class="pt-3">
                                                <?php echo $course['dateCreate']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold" style="width: 122px;">
                                                Giảng viên:
                                            </td>
                                            <td class="pt-3">
                                                <?php echo $course['teacher_name']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold" style="width: 122px;">
                                                Danh mục:
                                            </td>
                                            <td class="pt-3">
                                                <?php echo $course['category_name']; ?>
                                            </td>
                                        </tr>
                                        <tr class="text-justify">
                                            <td class="fw-bold" style="width: 122px;">
                                                Ghi chú:
                                            </td>
                                            <td class="pt-3">
                                                <?php echo $course['note']; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="mt-4 attachments">
                                    <h4 class="form-label h5">
                                        Tài liệu khóa học
                                    </h4>
                                    <input name="filepond" hidden>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="d-flex flex-column mt-2 justify-content-center align-items-center">
                                    <img src="../../public/assets/images/gradation.jpg" alt="" style="max-width: 220px;">
                                    <div class="mt-2" style="font-size: 20px; color: red;">
                                        <span class="fw-bold">
                                            <?php echo $course['price']; ?>đ
                                        </span>
                                    </div>
                                    <form action="AdminController.php?action=course-register-user" method="POST" id="form-register">
                                        <input type="text" value="<?php echo $course['id']; ?>" hidden name="course_id">
                                        <input type="text" hidden name="course-register-user">
                                        <?php
                                            $_SESSION['user_id'] = 6;
                                        ?>
                                        <button type="button" class="btn btn-primary mt-2 register-course"
                                            <?php if (isCourseRegisteredByUser($course['id'], $_SESSION['user_id'])) echo 'disabled'; ?>
                                            style="border-radius: 30px;">
                                            <?php if (isCourseRegisteredByUser($course['id'], $_SESSION['user_id'])): ?>
                                                Đã đăng ký
                                            <?php else: ?>
                                                Đăng ký học
                                            <?php endif; ?>
                                        </button>
                                    </form>
                                    <div class="mt-2" style="font-size: 14px;">
                                        <ul>
                                            <li class="d-flex justify-content-start align-items-center mt-2">
                                                <svg style="width: 14px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gauge-high" class="svg-inline--fa fa-gauge-high _icon_pzdoh_80" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM96 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm352-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"></path>
                                                </svg>
                                                <span class="ms-2">Trình độ cơ bản</span>
                                            </li>
                                            <li class="d-flex justify-content-start align-items-center mt-2">
                                                <svg style="width: 14px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" class="svg-inline--fa fa-clock _icon_pzdoh_80" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="currentColor" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
                                                </svg>
                                                <span class="ms-2"> Thời lượng:</span>
                                                <span class="fw-bold"><?php echo $course['duration']; ?> phút</span>
                                            </li>
                                            <li class="d-flex justify-content-start align-items-center mt-2">
                                                <svg style="width: 14px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="battery-full" class="svg-inline--fa fa-battery-full _icon_pzdoh_80" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor" d="M464 160c8.8 0 16 7.2 16 16V336c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16H464zM80 96C35.8 96 0 131.8 0 176V336c0 44.2 35.8 80 80 80H464c44.2 0 80-35.8 80-80V320c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32V176c0-44.2-35.8-80-80-80H80zm368 96H96V320H448V192z"></path>
                                                </svg>
                                                <span class="ms-2">Học mọi lúc, mọi nơi</span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <?php if (isCourseRegisteredByUser($course['id'], $_SESSION['user_id'])): ?>
                                        <div class="mt-5">
                                            <a href="<?php echo 'AdminController.php?action=comments-list-student&course_id=' . $course['id']; ?>" class="btn btn-primary mt-2" style="border-radius: 30px;">
                                                Diễn dàn trao đổi
                                                <i class="fa-solid fa-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        $('.register-course').on('click', function () {
            Swal.fire({
                title: 'Bạn có chắc muốn đăng ký khóa học này?',
                showCancelButton: true,
                icon: "warning",
                reverseButtons: true,
                confirmButtonText: "Đồng ý",
                cancelButtonText: "Hủy",
                customClass: {
                    title: 'd-flex',
                    actions: 'w-100 justify-content-center'
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    $(`#form-register`).submit();
                }
            });
        })
    });
</script>