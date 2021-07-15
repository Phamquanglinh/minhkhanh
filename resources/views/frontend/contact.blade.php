@extends('layout.main')
@section('custom-library')
    <link href="{{asset("css/css/contact.css")}}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="container">
        <div class="row shadow-lg">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.86869254542!2d105.81118531540193!3d20.997899994205817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac90eccf641b%3A0x266363012d89f8a8!2zMSDEkMaw4budbmcgS2jGsMahbmcgxJDDrG5oLCBUaMaw4bujbmcgxJDDrG5oLCBUaGFuaCBYdcOibiwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1626388070537!5m2!1svi!2s"
                width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="site-contact">
            <div class="row border-bottom">
                <div class="p-3 text-center my-3">
                    <h5> Nếu bạn có yêu cầu kinh doanh hoặc câu hỏi khác, vui lòng điền vào biểu mẫu sau để liên hệ với
                        chúng tôi. Cảm ơn bạn!</h5>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="text-center p-2 text-danger mb-3">Gửi thông tin liên hệ</h2>
                    <div class="float-start">
                        <form id="w0" action="#" method="post">
                            @csrf
                            <div class="form-group field-contactform-name required has-error">
                                <label class="control-label" for="contactform-name">Họ và tên</label>
                                <input type="text" id="contactform-name" class="form-control" name="ContactForm[name]"
                                       autofocus="" placeholder="Nguyễn Văn A" aria-required="true"
                                       aria-invalid="true" required>
                            </div>
                            <div class="row">
                                <div class="col-6 col-sm-7 col-md-7 col-lg-6 col-xl-6">
                                    <div class="form-group field-contactform-email required">
                                        <label class="control-label" for="contactform-email">Nhập email</label>
                                        <input type="email" id="contactform-email" class="form-control"
                                               name="ContactForm[email]" placeholder="minhkhanhgroups.com"
                                               aria-required="true" required>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-5 col-md-5 col-lg-6 col-xl-6">
                                    <div class="form-group field-contactform-phone required">
                                        <label class="control-label" for="contactform-phone">Số điện thoại</label>
                                        <input type="text" id="contactform-phone" class="form-control"
                                               name="ContactForm[phone]" placeholder="(+84)123456789"
                                               aria-required="true" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group field-contactform-subject required">
                                <label class="control-label" for="contactform-subject">Chủ đề</label>
                                <input type="text" id="contactform-subject" class="form-control"
                                       name="ContactForm[subject]" placeholder="Bạn đang gặp vấn đề gì?"
                                       aria-required="true" required>
                            </div>
                            <div class="form-group field-contactform-content required">
                                <label class="control-label" for="contactform-content">Nội dung chi tiết</label>
                                <textarea id="contactform-content" class="form-control" name="ContactForm[content]"
                                          rows="6" aria-required="true" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success col-12" name="contact-button">Gửi</button>
                            </div>

                        </form>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-md-block">
                    <div class="text-center">
                        <img src="http://localhost/minhkhanh/frontend/web/img/favicon.ico" alt="minhkhanhgroup"
                             class="rounded-circle" width="88px" height="88px">
                        <h3 class="text-danger pt-2">MINHKHANH-GROUP</h3>
                    </div>
                    <hr>
                    <div class="col-12 px-4">
                        <h3 class="text-danger">Địa chỉ:</h3>
                        <div> Trụ sở: Số 1 đường Khương Đình, Kim Giang, Hà Nội</div>
                        <div> Văn phòng: Số 1 đường Khương Đình, Kim Giang, Hà Nội</div>
                        <div> SĐT: 0916.354.248</div>
                        <div> Email: minhkhanh@gmail.com</div>
                        <hr>
                    </div>
                    <div class="col-12 px-4 d-none d-md-block">
                        <img src="https://jobsgo.vn/blog/wp-content/uploads/2019/07/Cham-soc-khach-hang-01.jpg"
                             alt="Chăm sóc khách hàng." width="100%"
                             style="border-radius:10px; border:none;" class="shadow-lg">
                    </div>
                </div>
            </div>
        </div>
@endsection
