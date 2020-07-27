<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transportation HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/frontend/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="public/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/frontend/css/slicknav.css">
    <link rel="stylesheet" href="public/frontend/css/flaticon.css">
    <link rel="stylesheet" href="public/frontend/css/animate.min.css">
    <link rel="stylesheet" href="public/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="public/frontend/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="public/frontend/css/themify-icons.css">
    <link rel="stylesheet" href="public/frontend/css/slick.css">
    <link rel="stylesheet" href="public/frontend/css/nice-select.css">
    <link rel="stylesheet" href="public/frontend/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
</head>
<style>
    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
</style>
<style>
    .wrapper-item {
        -moz-transform: scale(0.7, 0.7); /* Moz-browsers */
        zoom: 0.7; /* Other non-webkit browsers */
        zoom: 70%; /* Webkit browsers */
    }
    body, h1, h2, h3, h4, h5, h6, p {
        font-family: "Barlow",sans-serif !important;
    }
</style>
<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="public/frontend/img/logo/loder.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>Số Điện Thoại Liên Hệ: (+84) 123456789</li>
                                    <li>Email: Admin@gmail.com</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="https://www.facebook.com"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.google.com/maps/"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li> <a href="https://www.instagram.com/"><i class="fab fa-google-plus-g"></i></a></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky" style="height: 100px">
                <div class="container" style="margin-top: -15px">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{url('/trang-chu')}}"><img src="public/frontend/img/logo/logo1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{url('/trang-chu')}}">Trang Chủ</a></li>
                                            <li><a href="{{url('/about')}}">Giới thiệu</a></li>
                                            <li><a href="{{url('/service')}}">Dịch Vụ</a></li>
                                            <li><a>Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="{{url('/new')}}">Tin Tức</a></li>
                                                    <li><a href="{{url('/detail_new')}}">Tin chi tiết</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('/contact')}}">Liên Hệ</a></li>

                                            <?php
                                            $customer_id = Session::get('customer_id');
                                            if ($customer_id!=NULL){

                                            ?>
                                            <li><a href="{{url('/checkout')}}">Đăng Ký Đơn Hàng</a></li>
                                            <?php

                                            }else{

                                            ?>
                                            <li><a href="{{url('/login_checkout')}}">Đăng Ký Đơn Hàng</a></li>
                                            <?php
                                            }
                                            ?>
                                            <!-- Login/Logout -->
                                            <?php
                                                $customer_id = Session::get('customer_id');
                                                if ($customer_id!=NULL){

                                            ?>
                                                <li><a href="{{URL::to('/logout_checkout')}}"><button type="button" class="btn btn-info" style="padding: 20px;">Đăng Xuất</button></a></li>
                                            <?php

                                            }else{

                                            ?>
                                                <li><a href="{{URL::to('/login_checkout')}}"><button type="button" class="btn btn-info" style="padding: 20px;">Đăng Nhập</button></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

</header>

<main>

@yield('content')
</main>

<footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- footer Heading -->
                <div class="footer-heading">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-lg-8 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Chúng tôi hiểu tầm quan trọng của việc tiếp cận từng công việc!</h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <span class="contact-number f-right">(+84) 123456789</span>
                        </div>
                    </div>
                </div>
                <!-- Footer Menu -->
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Tất cả</h4>
                                <ul>
                                    <li><a href="{{url('/about')}}">thông tin</a></li>
                                    <li><a href="{{url('/service')}}">dịch vụ</a></li>
                                    <li><a href="{{url('/new')}}"> Blog</a></li>
                                    <li><a href="{{url('/contact')}}"> Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Giờ mở cửa</h4>
                                <ul>
                                    <li><a>Monday 11am-7pm</a></li>
                                    <li><a>Tuesday-Friday 11am-8pm</a></li>
                                    <li><a>Saturday 10am-6pm</a></li>
                                    <li><a>Sunday 11am-6pm</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="public/frontend/img/logo/logo1.jpg" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">Dịch vụ khách hàng không phải là một bộ phận, đó là công việc của tất cả mọi người</p>
                                </div>
                            </div>
                            <!-- Footer Social -->
                            <div class="footer-social ">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.google.com/maps/"><i class="fas fa-globe"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="public/frontend/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="public/frontend/js/vendor/jquery-1.12.4.min.js"></script>
<script src="public/frontend/js/popper.min.js"></script>
<script src="public/frontend/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="public/frontend/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="public/frontend/js/owl.carousel.min.js"></script>
<script src="public/frontend/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="public/frontend/js/wow.min.js"></script>
<script src="public/frontend/js/animated.headline.js"></script>
<script src="public/frontend/js/jquery.magnific-popup.js"></script>

<!-- Nice-select, sticky -->
<script src="public/frontend/js/jquery.nice-select.min.js"></script>
<script src="public/frontend/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="public/frontend/js/contact.js"></script>
<script src="public/frontend/js/jquery.form.js"></script>
<script src="public/frontend/js/jquery.validate.min.js"></script>
<script src="public/frontend/js/mail-script.js"></script>
<script src="public/frontend/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="public/frontend/js/plugins.js"></script>
<script src="public/frontend/js/main.js"></script>

</body>
</html>
