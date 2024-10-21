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
                                    <h5 class="h4">Danh sách khóa học</h5>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <div class="fl-right inline-blk">
                                        <a title="Tạo mới"
                                            class="btn btn-success btn-item text-white"
                                            href="AdminController.php?action=create-course"><i
                                                class='fas fa-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive mt-3">
                                <table class="table table-striped table-bordered table-border mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">Mã khóa học</th>
                                            <th class="text-center">Tên</th>
                                            <th class="text-center">Giá tiền</th>
                                            <th class="text-center">Ngày tạo</th>
                                            <th class="text-center">Thời lượng</th>
                                            <th class="text-center">Giảng viên</th>
                                            <th class="text-center w-action">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        foreach ($courses as $course) {
                                            extract($course);
                                            $editCourse = "AdminController.php?action=edit-course&id=".$id;
                                            $detailCourse = "AdminController.php?action=detail-course&id=".$id;
                                            echo '
                                                <tr>
                                                    <td class="text-center">'.$code.'</td>
                                                    <td class="text-center">'.$name.'</td>
                                                    <td class="text-center">'.$price.'</td>
                                                    <td class="text-center">'.$dateCreate.'</td>
                                                    <td class="text-center">'.$duration.'</td>
                                                    <td class="text-center">'.$course['teacher_name'].'</td>
                                                    <td class="text-center">
                                                        <a href="'.$detailCourse.'" class="px-2 btn hover-color hover-warning event-stop" ><i class="bx bx-file-blank event-stop"></i></a>
                                                        <a href="'.$editCourse.'" class="px-2 btn hover-color hover-warning event-stop"><i class="bx bx-edit-alt event-stop"></i></a>
                                                        <a href="#" data-id="'.$id.'" class="px-2 btn btn-delete hover-color hover-warning event-stop"><i class="bx bx-trash"></i></a>
                                                    </td>
                                                </tr>';
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {
        $(document).on('click', '.btn-delete', function () {
            const id = $(this).data('id');
            Swal.fire({
                title: 'Bạn có chắc muốn xóa bài đăng này?',
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
                    const url = "AdminController.php?action=delete-course&id=" + id;
                    window.location.href = url; 
                }
            });
        })
    });
</script>