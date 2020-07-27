@extends('welcome')
@section('content')
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" style="background-image: url(public/frontend/img/hero/789.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap">
                            <h2>dịch vụ <span style="color:#FF5F13">GoGo-Transport </span></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/trang-chu')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{url('/service')}}">Dịch vụ</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Categories Area Start -->

    <div class="categories-area section-padding30" style="background-color: #F9F9F9;padding: 0;zoom: 80%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="padding: 20px;">
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
@endsection
