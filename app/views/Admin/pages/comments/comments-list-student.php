<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="card-body">
                        <div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-body p-4">
                                        <h4 class="text-center mb-4 pb-2" style="font-size: 18px;">Diễn đàn trao đổi</h4>

                                        <div class="row">
                                            <div class="col">
                                                <?php foreach ($comments as $comment): ?>
                                                    <div class="d-flex flex-start mt-4">
                                                        <img style="max-width: unset; width: 50px; height: 50px; border: 1px solid #000;" class="rounded-circle shadow-1-strong me-3"
                                                            src="assets/images/avatar-default.png" alt="avatar" />
                                                        <div class="flex-grow-1 flex-shrink-1">
                                                            <div>
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <p class="mb-1">
                                                                        <?php echo htmlspecialchars($comment['student_name']); ?> <span class="small">- <?php echo $comment['created_at']; ?></span>
                                                                    </p>
                                                                    <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> Trả lời</span></a>
                                                                </div>
                                                                <p class="small mb-0 text-justify">
                                                                    <?php echo htmlspecialchars($comment['message']); ?>
                                                                </p>
                                                            </div>

                                                            <?php if (!empty($comment['children'])): ?>
                                                                <?php foreach ($comment['children'] as $commentChild): ?>
                                                                    <div class="d-flex flex-start mt-4">
                                                                        <a class="me-3" href="#">
                                                                            <img style="max-width: unset; width: 50px; height: 50px; border: 1px solid #000;" class="rounded-circle shadow-1-strong"
                                                                                src="assets/images/avatar-default.png" alt="avatar" />
                                                                        </a>
                                                                        <div class="flex-grow-1 flex-shrink-1">
                                                                            <div>
                                                                                <div class="d-flex justify-content-between align-items-center">
                                                                                    <p class="mb-1">
                                                                                        <?php echo htmlspecialchars($commentChild['student_name']); ?> <span class="small">- <?php echo $commentChild['created_at']; ?></span>
                                                                                    </p>
                                                                                </div>
                                                                                <p class="small mb-0 text-justify">
                                                                                    <?php echo htmlspecialchars($commentChild['message']); ?>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>

                                                            <form class="w-100 mt-2 fw-bold" id="form-child-<?php echo $comment['id']; ?>" action="comments_store.php" method="POST">
                                                                <label for="">Trả lời truy vấn</label>
                                                                <input type="hidden" name="course_id" value="<?php echo $comment['course_id']; ?>">
                                                                <input type="hidden" name="comment_id" value="<?php echo $comment['id']; ?>">
                                                                <input type="hidden" name="child" value="1">
                                                                <textarea name="messages" required class="form-control"></textarea>
                                                                <button data-id="<?php echo $comment['id']; ?>" type="button" class="btn btn-primary mt-2 btn-child" style="float: right;">Trả lời</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>

                                                    <form class="w-100 mt-2 fw-bold p-2" id="form-parent" style="border: 1px dashed #ccc;" action="comments_store.php" method="POST">
                                                        <label for="">Đăng truy vấn</label>
                                                        <input type="hidden" name="course_id" value="<?php echo $courseId; ?>">
                                                        <input type="hidden" name="child" value="0">
                                                        <textarea name="messages" required class="form-control"></textarea>
                                                        <div class="w-100 d-flex justify-content-center align-items-center">
                                                            <button type="button" class="btn btn-primary mt-2 btn-parent">Gửi truy vấn</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(document).on('click', '.btn-child', function() {
            const id = $(this).data('id');
            $(`#form-child-${id}`).submit();
        })
        
        $(document).on('click', '.btn-parent', function() {
            $('#form-parent').submit();
        })
    });
</script>