<?php if (is_array($course)) extract($course); ?>
<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-6">
                                <h4 class="h3" style="color: #0d6cfd;"><?= $name ?> - <?= $code ?></h4>
                                <p class="text-justify"><?= $description ?></p>

                                <table class="mt-3">
                                    <tbody>
                                        <tr>
                                            <td class="fw-bold" style="width: 122px;">
                                                Thời gian tạo:
                                            </td>
                                            <td class="pt-3">
                                                <?= $dateCreate ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold" style="width: 122px;">
                                                Giảng viên:
                                            </td>
                                            <td><?= $teacher ?></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold" style="width: 122px;">
                                                Danh mục:
                                            </td>
                                            <td class="pt-3">
                                                <?= $category ?>
                                            </td>
                                        </tr>
                                        <tr class="text-justify">
                                            <td class="fw-bold" style="width: 122px;">
                                                Ghi chú:
                                            </td>
                                            <td class="pt-3">
                                                <?= $note ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="col-6">
                                <h4 class="text-center mb-4 pb-2" style="color: #0d6cfd; font-size: 18px;">DANH MỤC CÁC TRUY VẤN</h4>
                                <div class="row">
                                    <div class="col">
                                        <?php foreach ($comments as $comment): ?>
                                            <div class="d-flex flex-start mt-4">
                                                <img style="max-width: unset; width: 50px; height: 50px; border: 1px solid #000;" class="rounded-circle shadow-1-strong me-3"
                                                    src="../../public/img/logo.png" alt="avatar" />
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
                                                                        src="../../public/img/logo.png" alt="avatar" />
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
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
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