<?php if(is_array($course)) extract($course); ?>
<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
            <div class="card radius-15">
        <div class="card-body">
            <div class="row mt-4">
                <div class="col-6">
                    <h4 class="h3" style="color: #0d6cfd;"><?=$name?> - <?=$code?></h4>
                    <p class="text-justify"><?=$description?></p>

                    <table class="mt-3">
                        <tbody>
                            <tr>
                                <td class="fw-bold" style="width: 122px;">
                                    Thời gian tạo:
                                </td>
                                <td class="pt-3">
                                    <?=$dateCreate?>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 122px;">
                                    Giảng viên:
                                </td>
                                <td><?=$teacher?></td>
                            </tr>
                            <tr>
                                <td class="fw-bold" style="width: 122px;">
                                    Danh mục:
                                </td>
                                <td class="pt-3">
                                    <?=$category?>
                                </td>
                            </tr>
                            <tr class="text-justify">
                                <td class="fw-bold" style="width: 122px;">
                                    Ghi chú:
                                </td>
                                <td class="pt-3">
                                    <?=$note?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-6">
                    <h4 class="text-center mb-4 pb-2" style="color: #0d6cfd; font-size: 18px;">DANH MỤC CÁC TRUY VẤN</h4>
                    <div class="row">
                        <div class="col">
                            
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