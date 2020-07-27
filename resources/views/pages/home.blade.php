@extends('welcome')
@section('content')

    <style>

    </style>
    <div class="wrapper-main">
        <!--? slider Area Start-->
        <div class="slider-area wrapper-item" style="zoom: 85%;">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center"
                     style="background-image: url(public/frontend/img/hero/123.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9">
                                <div class="hero__caption">
                                    <h1 >Giao hàng linh Hoạt <span> Chiều khách </span> Dễ dàng!</h1>
                                </div>
                                <!--Hero form -->
                                <form action="{{URL::to('/tim_kiem')}}" class="search-box" method="POST">
                                    {{csrf_field()}}
                                    <div class="input-form">
                                        <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm">
                                    </div>
                                    <div class="search-form">
                                        <input type="submit" name="search_items" class="btn btn-primary btn-sm" value="tìm kiếm" style="height: 60px;">
                                    </div>
                                </form>
                                <!-- Hero Pera -->
                                <div class="hero-pera">
                                    <p>Xem trạng thái đơn hàng của bạn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? our info Start -->
        <div class="our-info-area pt-70 pb-40 " style=" background-color: #ffedea;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-support"></span>
                            </div>
                            <div class="info-caption">
                                <p>Đường Dây Nóng</p>
                                <span> (+84) 123456789 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="info-caption">
                                <p>Thời Gian Làm Việc</p>
                                <span>Mon - Sat 8.00 - 18.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-place"></span>
                            </div>
                            <div class="info-caption">
                                <p>Địa chỉ Chi Nhánh</p>
                                <span>Chi Nhánh 1: Hà Nội </span>
                                <span>Chi Nhánh 2: TP.Hcm </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our info End -->
        <!--? About Area Start -->
        <div class="about-low-area padding-bottom wrapper-item" style="padding-top: 100px;background-repeat: no-repeat;background-size: cover;zoom:80% " data-background="public/frontend/img/gallery/123123.jpg">
            <div class="row" style="padding: 10px 150px;">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>Một số thông tin về công ty của chúng tôi</span>
                            <h2>Giải pháp vận chuyển và hậu cần an toàn giúp tiết kiệm thời gian quý báu của quý khách hàng!</h2>
                        </div>
                        <p style="font-size: 20px">GoGo-Transport Tổng Công ty cổ phần bưu chính FPT Aptech , tiền thân từ Trung tâm phát hành báo chí được thành lập ngày 23/07/2018. Với nhiệm vụ ban đầu là phục vụ các cơ quan Quân đội trong Bộ Quốc phòng. Năm 2019, GoGo-Transport chuyển đổi từ mô hình hạch toán phụ thuộc sang hạch toán độc lập thành Công ty TNHH NN 1 TV Bưu chính Fpt Aptech....</p>
                        </p>
                        <a href="{{url('/about')}}" class="btn">Tìm hiều thêm về chúng tôi</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img">
                            <img src="public/frontend/img/gallery/transport_img_1.jpg" alt="" style="height: 600px;width: 100%;border-radius: 50%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding30" style="background-color: #F9F9F9;zoom: 80%;padding-bottom: 0 !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span style="text-transform: uppercase;font-size:25px !important;">Các Loại Dịch Vụ Của Chúng Tôi</span>
                            <h2>Chúng tôi có thể cung cấp cho bạn </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($category as $key =>$cate)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-cat text-center mb-50">
                                <div class="cat-icon">
                                    <span class="flaticon-shipped"></span>
                                </div>
                                <div class="cat-cap">
                                    <h5><a>{{$cate->category_name}}</a></h5>
                                    <p>{{$cate->category_desc}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Categories Area End -->
            <!--? Blog Area Start -->
            <div class="home-blog-area section-padding30" style="zoom: 80%;background-color: #ddbed1; " data-background="public/frontend/img/gallery/32434.jpg">
                <div class="container">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-70">
                                <span style="color: #5e4124;font-size: 45px;">Những tin tức gần đây của chúng tôi</span>
                                <h2>Tin tức mới nổi bật</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($all_blog as $key => $blog)
                                    <div class="swiper-slide">
                                        <div>
                                            <div class="home-blog-single mb-30">
                                                <div class="blog-img-cap">
                                                    <div class="blog-img">
                                                        <img src="{{URL::to('public/uploads/blog/'.$blog->blog_image)}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="blog-caption">
                                                    <div class="blog-date text-center">
                                                        <p>Hôm nay</p>
                                                        <span class="date-now" style="font-size: 18px"></span>
                                                        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
                                                        <script language="Javascript">
                                                            $(document).ready(function () {
                                                                var today = new Date();
                                                                var dd = today.getDate();
                                                                var mm = today.getMonth() + 1; //January is 0!

                                                                var yyyy = today.getFullYear();
                                                                if (dd < 10) {
                                                                    dd = '0' + dd;
                                                                }
                                                                if (mm < 10) {
                                                                    mm = '0' + mm;
                                                                }
                                                                today =  dd + '/' + mm;
                                                                $('.date-now').text(today);
                                                            })
                                                        </script>
                                                    </div>
                                                    <div class="blog-cap">
                                                        <h3><a href="{{url('/detail_new')}}">{{$blog->blog_name}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- Swiper JS -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper('.swiper-container', {
                                    slidesPerView: 3,
                                    spaceBetween: 30,
                                    pagination: {
                                        el: '.swiper-pagination',
                                        clickable: true,
                                    },
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Area End -->
            <!--Team Ara Start -->
            <div class="team-area section-padding30" style="zoom: 80%">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="cl-xl-7 col-lg-8 col-md-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-70">
                                <span>Các thành viên trong team của chúng tôi</span>
                                <h2>chúng tôi có thể giúp gì cho bạn?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-team mb-30 text-center">
                                <div class="team-img">
                                    <img src="public/frontend/img/gallery/PhamBaoNgoc.jpg" alt="">
                                    <div class="team-caption">
                                        <h3><a href="#">Phạm Bảo Ngọc</a></h3>
                                        <p>Firt Member</p>
                                        <!-- Blog Social -->
                                        <div class="team-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-team mb-30 text-center">
                                <div class="team-img">
                                    <img src="public/frontend/img/gallery/DangTuanSon.jpg" alt="">
                                    <div class="team-caption">
                                        <h3><a href="#">Đặng Tuấn Sơn</a></h3>
                                        <p>Second Member</p>
                                        <!-- Blog Social -->
                                        <div class="team-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="single-team mb-30 text-center">
                                <div class="team-img">
                                    <img src="public/frontend/img/gallery/Teacher.jpg" alt="">
                                    <div class="team-caption">
                                        <h3><a href="#">Teacher</a></h3>
                                        <p>???</p>
                                        <!-- Blog Social -->
                                        <div class="team-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team Ara End -->
            <!--? Testimonial Start -->
            <div class="testimonial-area testimonial-padding section-bg" style="padding-bottom: 204px" data-background="public/frontend/img/gallery/section_bg04.jpg">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-7 col-lg-7">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-25">
                                <span>Nhận xét từ khách hàng</span>
                                <h2>khách hàng nhận xét về chúng tôi!</h2>
                            </div>
                            <div class="h1-testimonial-active mb-70">
                                <!-- Single Testimonial -->
                                @foreach($all_comment_one as $key=> $value)
                                <div class="single-testimonial ">
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-caption ">
                                        <div class="testimonial-top-cap">
                                            <p>{{$value->comment_content}}</p>
                                        </div>
                                        <!-- founder -->
                                        <div class="testimonial-founder d-flex align-items-center">
                                            <div class="founder-img">
                                                <img src="public/frontend/img/gallery/121233.jpg" alt="">
                                            </div>
                                            <div class="founder-text">
                                                <span>{{$value->comment_name}}</span>
                                                <p>{{$value->comment_email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Single Testimonial -->
                            </div>

                        </div>
                        <!-- Form Start -->
                        <div class="col-xl-4 col-lg-5 col-md-8">
                            <div class="testimonial-form text-center">
                                <h3>Luôn luôn lắng nghe, sẵn sàng hỏi đáp (1->9)</h3>
                                <input type="text" placeholder="Đánh giá điểm">
                                <button name="submit" class="submit-btn">Gửi đánh giá</button>
                            </div>
                        </div>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
            <!--? contact-form start -->
            <section class="contact-form-area section-bg  pt-115 pb-120 fix wrapper-item" data-background="public/frontend/img/gallery/picture1.jpg" >
                <div class="container">
                    <div class="row justify-content-end">
                        <!-- Contact wrapper -->
                        <div class="col-xl-8 col-lg-9">
                            <div class="contact-form-wrapper">
                                <!-- From tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Section Tittle -->
                                        <div class="section-tittle mb-50">
                                            <span> Cảm ơn quý khách đã tin dùng dịch vụ chúng tôi </span>
                                            <h2>Đặt đơn hàng ngay tại đây</h2>
                                            <p>Bố trí linh hoạt, thuận tiện và tiện lợi.  Bạn có thể chọn bố cục & cách gửi hàng mà bạn mong muốn và phù hợp nhất đến bạn.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- form -->
                                <form action="{{URL::to('/save_checkout_customer')}}" class="contact-form" method="POST">
                                    {{csrf_field()}}
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-form">
                                                <input type="text" name="shipping_name" placeholder="Họ và tên người gửi">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-form">
                                                <input type="text" name="shipping_phone" placeholder="Số điện thoại người gửi ">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-form">
                                                <input type="text" name="shipping_email" placeholder="Email*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-form">
                                                <input type="text" name="shipping_reciever_name" placeholder="Tên người nhận">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-form">
                                                <input type="text"name="shipping_reciever_phone" placeholder="Số điện thoại người nhận">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-form">
                                                 <input type="text" name="shipping_address" placeholder="Địa chỉ nhận hàng">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-form">
                                                <input type="text" name="shipping_delivery_address" placeholder="Địa chỉ giao hàng">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-form">
                                                <select class="nice-select-one" name="shipping_category" id="Danh Mục">
                                                    <option type="text" value="Chuyển phát siêu tốc">Chuyển phát siêu tốc</option>
                                                    <option type="text" value="Chuyển phát tiết kiệm theo hộp">Chuyển phát tiết kiệm theo hộp</option>
                                                    <option type="text" value="Chuyển phát trong ngày nội tỉnh">Chuyển phát trong ngày nội tỉnh</option>
                                                    <option type="text" value="Chuyển phát hỏa tốc">Chuyển phát hỏa tốc</option>
                                                    <option type="text" value="Vận chuyển dung tích lớn">Vận chuyển dung tích lớn</option>
                                                    <option type="text" value="Chuyển phát tiết kiệm">Chuyển phát tiết kiệm</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-form">
                                                <textarea name="shipping_notes"  placeholder="Ghi chú đơn hàng của bạn" rows="20" style="width: 600px; height: 250px;font-size: 18px"></textarea>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <?php
                                        $customer_id = Session::get('customer_id');
                                        if ($customer_id!=NULL){

                                        ?>
                                        <div class="col-lg-12">
                                            <button name="submit" value="Gửi" name="send_order" class="submit-btn"><a href="{{url('/payment')}}">Gửi yêu cầu</a></button>
                                        </div>
                                        <?php

                                        }else{

                                        ?>
                                        <div class="col-lg-12">
                                            <button name="submit" value="Gửi" name="send_order" class="submit-btn"><a href="{{url('/login_checkout')}}">Gửi yêu cầu</a></button>
                                        </div>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-form end -->
        </div>
@endsection
