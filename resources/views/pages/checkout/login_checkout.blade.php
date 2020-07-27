@extends('welcome')
@section('content')
    <style>
        .login-form h2, .signup-form h2 {
            color: #696763;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            font-weight: 300;
            margin-bottom: 30px;
        }
        .login-form form input, .signup-form form input {
            background: #F0F0E9;
            border: medium none;
            color: #696763;
            display: block;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            font-weight: 300;
            height: 40px;
            margin-bottom: 10px;
            outline: medium none;
            padding-left: 10px;
            width: 100%;
        }

        login-form form span{
            line-height: 25px;
        }

        .login-form form span input {
            width: 15px;
            float: left;
            height: 15px;
            margin-right: 5px;
        }

        .login-form form button {
            margin-top: 23px;
            height: 40px;
        }

        .login-form form button, .signup-form form button {
            background: #FE980F;
            border: medium none;
            border-radius: 0;
            color: #FFFFFF;
            display: block;
            font-family: 'Roboto', sans-serif;
            padding: 6px 25px;
            height: 40px;
        }

        .login-form label{

        }

        .or{
            background: #FE980F;
            border-radius: 40px;
            color: #FFFFFF;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            height: 50px;
            line-height: 50px;
            margin-top: 75px;
            text-align: center;
            width: 50px;
        }

        .login-form label input {
            border: medium none;
            display: inline-block;
            height: 0;
            margin-bottom: 0;
            outline: medium none;
            padding-left: 0;
        }

    </style>
    <section id="form" style="display: block;
    margin-bottom: 185px;
    margin-top: 185px;
    overflow: hidden;">
        <div class="container">
            <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="login-form"><!--login form-->
                            <h2>Đăng nhập vào tài khoản</h2>
                            <form action="{{URL::to('/login_customer')}}" method="POST">
                                {{csrf_field()}}
                                <input type="text" name="email_account" placeholder="Tài khoản"/>
                                <input type="password" name="password_account" placeholder="password"/>
                                <span>
								<input type="checkbox" class="checkbox">
								<span style="line-height: 14px">Giữ đăng nhập</span>
							    </span>
                                <button type="submit" class="btn btn-default">Đăng nhập</button>
                            </form>
                        </div><!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">Hoặc</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="signup-form"><!--sign up form-->
                            <h2>Đăng ký!</h2>
                            <form action="{{URL::to('/add_customer')}}" method="POST">
                                {{csrf_field()}}
                                <input type="text" name="customer_name" placeholder="Học và tên"/>
                                <input type="email" name="customer_email" placeholder="Địa chỉ email"/>
                                <input type="password" name="customer_password" placeholder="Mật khẩu"/>
                                <input type="text" name="customer_phone" placeholder="Số điện thoại"/>
                                <button type="submit" class="btn btn-default">Đăng ký</button>
                            </form>
                        </div><!--/sign up form-->
                    </div>
                </div>
        </div>
    </section><!--/form-->
@endsection
