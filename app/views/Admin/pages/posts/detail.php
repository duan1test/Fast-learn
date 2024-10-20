<?php
    if(is_array($post)){
        extract($post);
    }
?>
<!--main-->
       <div class="page-wrapper">
           <div class="page-content-wrapper">
               <div class="page-content">
                   <div class="row d-flex justify-content-center ">
                       <div class="card radius-15">
                           <div class="card-body">
                               <div class="row">
                                   <div class="col-8">
                                       <div class="row">
                                           <h5 class="page-title mt-3 mb-3" style="color: #0d6cfd;"><?= $title ?></h5>
                                           <p><?= $title_child ?></p>
                                       </div>
                                       <div class="row">
                                           <div class="d-flex justify-content-end flex-column align-items-end">
                                               <span><?= $created_at ?? '' ?></span>
                                               <span>Tags: <?= $tag ?></span>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <span class="fw-bold h6">
                                               <?= $title_0 ?? '' ?>
                                           </span>
                                           <p class="mb-3 text-justify"><?= $content ?? '' ?></p>
                                           <span class="fw-bold h6">
                                               <?= $title_1 ?? '' ?>
                                           </span>
                                           <p class="mb-3 text-justify"><?= $content_1 ?? '' ?></p>
                                           <span class="fw-bold h6">
                                               <?= $title_2 ?? '' ?>
                                           </span>
                                           <p class="mb-3 text-justify"><?= $content_2 ?? '' ?></p>
                                           <span class="fw-bold h6">
                                               <?= $title_3 ?? '' ?>
                                           </span>
                                           <p class="mb-3 text-justify"><?= $content_3 ?? '' ?></p>
                                           <span class="fw-bold h6">
                                               <?= $title_4 ?? ''?>
                                           </span>
                                           <p class="mb-3 text-justify"><?= $content_4 ?? '' ?></p>
                                           <span class="fw-bold h6">
                                               <?= $title_5 ?? ''?>
                                           </span>
                                           <p class="mb-3 text-justify"><?= $content_5 ?? '' ?></p>
                                       </div>
                                       <div class="row text-end mt-3">
                                           <span> (Lượt xem: <?= $viewer ?>)</span>
                                       </div>
                                   </div>
                                   <div class="col-4">
                                       <div class="row">
                                           <div class="col-12 d-flex justify-content-center">
                                               <h5 class="page-title mt-3 mb-3">Tin hoạt động</h5>
                                           </div>
                                           <?php 
                                            foreach ($posts as $val) {
                                                extract($val);
                                                $postDetail = "AdminController.php?action=post-detail&id=" . $id;
                                                echo 
                                                '<div class="col-12 mt-4">
                                                    <div class="d-flex flex-row">
                                                        <img src="../../public/img/logo.png" alt="" style="width: 100px; height: 77px;">
                                                        <div class="d-flex flex-column">
                                                            <a href="'.$postDetail.'" class="h5" style="color: #0d6cfd;">
                                                                '.$title.'
                                                            </a>
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
           </div>
       </div>
       </body>