@extends('welcome')
@section('content')
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" style="background-image: url(public/frontend/img/hero/121.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap">
                            <h2> tin Khuyến Mãi <span style="color:#FF5F13"> GoGo-Transport </span>  </h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/trang-chu')}}">Trang chủ</a></li>
                                    <li class="breadcrumb-item"><a href="#">Blog chi tiết</a></li>
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
    <section class="blog_area single-post-area section-padding " style="zoom: 80%">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    @foreach($all_blog as $key=>$blog)
                    <div class="single-post">
                        <div class="feature-img">
                            <img src="{{URL::to('public/uploads/blog/'.$blog->blog_image)}}" alt="" style="width: 750px;">
                        </div>
                        <div class="blog_details">
                            <h2>{{$blog->blog_name}}
                            </h2>
                            <p>
                                {{$blog->blog_desc}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">

                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                            </div>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.google.com/maps"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>Comments</h4>
                        <div class="comment-list">
                            @foreach($blog_comment_one as $key => $value)
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                        <div class="blog-author">
                                            <div class="thumb">
                                                <img src="public/frontend/img/gallery/121233.jpg" alt="">
                                            </div>
                                            <a href="#" >
                                                <h4><a href="#" style="font-size: 20px;"><b>{{$value->blog_comment_name}}</b></a></h4>
                                            </a>
                                        <div class="media align-items-center" style="width: 700px">
                                            <div class="media-body">

                                                <p>{{$value->blog_comment_content}}</p>
                                                <br>
                                                <p style="color: red">Email:{{$value->blog_comment_email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="{{URL::to('/save_blog_comment_customer')}}" method="POST">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                 <textarea class="form-control w-100" name="blog_comment_content" type="text" cols="30" rows="9"
                                           placeholder="Viết bình luận"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="blog_comment_name" id="name" type="text" placeholder="Họ và tên">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="blog_comment_email" id="email" type="text" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" value="gửi bình luận" name="send_order" class="button button-contactForm btn_1 boxed-btn">gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Điền từ khóa'
                                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tìm từ khóa'">
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
                        @foreach($all_blog_one as $key=> $value)
                            <aside class="single_sidebar_widget popular_post_widget">
                                <div class="media post_item">
                                    <img src="{{URL::to('public/uploads/blog/'.$value->blog_image)}}" alt=""style="width: 100px;">
                                    <div class="media-body">
                                        <a href="">
                                            <h3 >{{$value->blog_name}}</h3>
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
    <!--================ Blog Area end =================-->
@endsection
