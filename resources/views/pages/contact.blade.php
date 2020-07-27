@extends('welcome')
@section('content')
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" style="background-image: url(public/frontend/img/hero/909.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap">
                            <h2>Liên hệ <span style="color:#FF5F13"> GoGo-Transport </span></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/trang-chu')}}">Trang chủ</a></li>
                                    <li class="breadcrumb-item"><a href="{{url('/contact')}}">Hiên hệ</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=8%20T%C3%B4n%20Th%E1%BA%A5t%20Thuy%E1%BA%BFt+(GoGo-Transport)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.mapsdirections.info/en/measure-map-radius/">Measure circle on map</a></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Gửi ý kiến cá nhân </h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{URL::to('/save_comment_customer')}}" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" type="text" name="comment_content" cols="30" rows="9" placeholder=" nhập đơn văn.."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid"  name="comment_name" id="name" type="text"  placeholder="Họ và tên">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="comment_email" id="email" type="text"  placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="comment_theme" id="subject" type="text"  placeholder="Chủ đề">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" value="Gửi" name="send_order" class="button button-contactForm boxed-btn">Gửi</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Chi nhánh 1, Hà nội.</h3>
                            <p>Mỹ đình, 123</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Chi nhánh 2, Tp.Hồ CHí Minh.</h3>
                            <p>Gò vấp, 123</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>(+84) 123456789</h3>
                            <p>Từ thứ 2 đến thứ 7 9h-18h</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@gmail.com</h3>
                            <p>Gửi cho chúng tôi bất cứ khi nào bạn muốn!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
