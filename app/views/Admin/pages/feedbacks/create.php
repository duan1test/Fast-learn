<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="card-body">
                        <form method="post" id="myform" action="">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <h2 class="h4 fw-bold">Gửi phản hồi</h2>
                                    <div class="fs-6 fw-light">Chúng tôi đánh giá cao phản hồi của bạn và sử dụng nó để cải thiện các sự kiện của chúng tôi. Vui lòng điền vào biểu mẫu này để chia sẻ kinh nghiệm của bạn.</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="FullName" class="form-label fw-bold" style="font-size: 16px">Tiêu đề</label>
                                    <input type="text" name="title" id="FullName" placeholder="Tiêu đề"
                                        required="required" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label for="Email" class="form-label fw-bold" style="font-size: 16px">Email:</label>
                                    <input type="email" class="form-control" name="email" id="Email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="fw-bold" style="font-size: 16px;">Mức độ hài lòng?</label>
                                    <div class="d-flex flex-wrap flex-column">
                                        <div class="form-check form-check-inline mt-3">
                                            <input type="radio" name="feedback_level" value="Rất hài lòng"
                                                id="rating_overall_experience_0" class="form-check-input" />
                                            <label class="form-check-label" for="rating_overall_experience_0">Rất hài lòng</label>
                                        </div>
                                        <div class="form-check form-check-inline mt-3">
                                            <input type="radio" name="feedback_level" value="Hài lòng"
                                                id="rating_overall_experience_1" class="form-check-input" />
                                            <label class="form-check-label" for="rating_overall_experience_1">Hài lòng</label>
                                        </div>
                                        <div class="form-check form-check-inline mt-3">
                                            <input type="radio" name="feedback_level" value="Bình thường"
                                                id="rating_overall_experience_2" class="form-check-input" />
                                            <label class="form-check-label" for="rating_overall_experience_2">Bình thường</label>
                                        </div>
                                        <div class="form-check form-check-inline mt-3">
                                            <input type="radio" name="feedback_level" value="Không hài lòng"
                                                id="rating_overall_experience_3" class="form-check-input" />
                                            <label class="form-check-label" for="rating_overall_experience_3">Không hài lòng</label>
                                        </div>
                                        <div class="form-check form-check-inline mt-3">
                                            <input type="radio" name="feedback_level" value="Rất không hài lòng"
                                                id="rating_overall_experience_4" class="form-check-input" />
                                            <label class="form-check-label" for="rating_overall_experience_4">Rất không hài lòng</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="topic_suggestions" class="form-label fw-bold" style="font-size: 16px;">
                                        Ý kiến của bạn
                                    </label>
                                    <textarea name="feedback_content" class="form-control" id="topic_suggestions" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 d-flex align-items-center justify-content-center">
                                    <input value="Gửi" name="create_feedback" class="btn btn-primary"
                                        type="submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>