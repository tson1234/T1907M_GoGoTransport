@extends('welcome')
@section('content')
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" style="background-image: url(public/frontend/img/hero/121.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap">
                            <h2>Blog <span style="color:#FF5F13"> GoGo-Transport </span></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/trang-chu')}}">Trang chủ</a></li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding" style="zoom: 80%">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach($all_blog_two as $key => $value)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img src="{{URL::to('public/uploads/blog/'.$value->blog_image)}}" alt="" style="padding-left: 30px;">
                                <a  class="blog_item_date">
                                    <span>Hôm nay</span>
                                    <p class="date-now" style="font-size: 18px"></p>
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
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('/detail_new')}}">
                                    <h2>{{$value->blog_name}}</h2>
                                </a>
                                <p>Thông tin chi tiết vui lòng click vào bên dưới....</p>
                                <a href="{{url('/detail_new')}}"><button type="button" class="btn btn-info">Xem thêm</button></a>

                            </div>
                        </article>
                        @endforeach
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
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"> < </a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"> > </a></li>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Tìm từ khóa'
                                               onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Tìm kiếm</button>
                            </form>
                        </aside>
                        <h3 class="widget_title">Những bài blog gần đây</h3>
                        @foreach($all_blog as $key=>$blog)
                            <aside class="single_sidebar_widget popular_post_widget">
                                <div class="media post_item">
                                    <img src="{{URL::to('public/uploads/blog/'.$blog->blog_image)}}" alt=""style="width: 100px;">
                                    <div class="media-body">
                                        <a href="">
                                            <h3 >{{$blog->blog_name}}</h3>
                                        </a>
                                        <div class="blog-date text-center">
                                            <p class="date-now" style="font-size: 18px; color: #f84f0e;margin-left: -100px;" ></p>
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
                                                    today =  dd + '/' + mm + '/'+ yyyy;
                                                    $('.date-now').text(today);
                                                })
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
