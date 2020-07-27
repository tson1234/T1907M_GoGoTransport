@extends('welcome')
@section('content')
    <style>

        .step-one {
            margin-bottom: -10px
        }

        .register-req, .step-one .heading {
            background: none repeat scroll 0 0 #F0F0E9;
            color: #363432;
            font-size: 20px;
            margin-bottom: 35px;
            padding: 10px 25px;
            font-family: 'Roboto', sans-serif;
        }

        .checkout-options {
            padding-left: 20px;
            padding-top: 50px;
        }


        .checkout-options h3 {
            color: #363432;
            font-size: 20px;
            margin-bottom: 0;
            font-weight: normal;
            font-family: 'Roboto', sans-serif;
        }

        .checkout-options p {
            color: #434343;
            font-weight: 300;
            margin-bottom: 25px;
        }

        .checkout-options .nav li {
            float: left;
            margin-right: 45px;
            color: #696763;
            font-size: 18px;
            font-family: 'Roboto', sans-serif;
            font-weight: normal;
        }

        .checkout-options .nav label {
            font-weight: normal;
        }

        .checkout-options .nav li a {
            color: #FE980F;
            font-size: 18px;
            font-weight: normal;
            padding: 0
        }

        .checkout-options .nav li a:hover {
            background: inherit;
        }

        .checkout-options .nav i {
            margin-right: 10px;
            border-radius: 50%;
            padding: 5px;
            background: #FE980F;
            color:#fff;
            font-size: 14px;
            padding: 2px 3px;
        }


        .register-req  {
            font-size: 14px;
            font-weight: 300;
            padding: 15px 20px;
            margin-top: 35px;

        }

        .register-req p {
            margin-bottom: 0
        }



        .shopper-info p,
        .bill-to p,
        .order-message p {
            color: #696763;
            font-size: 20px;
            font-weight: 300
        }


        .shopper-info .btn-primary {
            background: #FE980F;
            border: 0 none;
            border-radius: 0;
            margin-right: 15px;
            margin-top: 20px;
        }


        .form-two, .form-one {
            float: left;
            width: 47%
        }


        .shopper-info > form > input,
        .form-two > form > select,
        .form-two > form > input,
        .form-one > form > input {
            background:#F0F0E9;
            border: 0 none;
            margin-bottom:10px;
            padding: 10px;
            width: 100%;
            font-weight: 300
        }

        .form-two > form > select {
            padding:10px 5px
        }

        .form-two {
            margin-left: 5%
        }


        .order-message textarea {
            font-size: 12px;
            height: 335px;
            margin-bottom: 20px;
            padding: 15px 20px;
        }
        textarea:hover {
            border: 1px solid #FE980F;
        }

        .form-two > form > input{
            background:#F0F0E9;
            border: 0 none;
            margin-bottom:10px;
            padding: 10px;
            width: 100%;
            font-weight: 300
        }

        .form-two > form > select {
            padding: 10px 5px;
        }

        textarea {
            background: transparent;
            border: 1px solid#F7F7F0
        }

        button, select {
            text-transform: none;
        }

         select, textarea {
            background: #F0F0E9;
            border:0;
            color: #696763;
            padding: 5px;
            width: 100%;
            border-radius: 0;
            resize: none
        }

        textarea {
            background: #F0F0E9;
            border: medium none;
            color: #A6A6A1;
            height: 195px;
            margin-bottom: 25px;
            margin-top: 15px;
            outline: medium none;
            padding-left: 10px;
            padding-top: 15px;
            resize: none;
            width: 99.5%;
        }

        .order-message label {
            font-weight:300;
            color: #696763;
            font-family: 'Roboto', sans-serif;
            margin-left: 10px;
            font-size: 14px
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Roboto', sans-serif;
        }

        .cart_delete a {
            background: #F0F0E9;
            color: #FFFFFF;
            padding: 5px 7px;
            font-size: 16px;
        }

        #cart_items .cart_info .cart_menu {
            background: #FE980F;
            color: #fff;
            font-size: 16px;
            font-family: 'Roboto', sans-serif;
            font-weight: normal;
        }

        #cart_items .cart_info .cart_total_price {
            color: #FE980F;
            font-size: 24px;
        }

        .review-payment h2 {
            color: #696763;
            font-size: 20px;
            font-weight: 300;
            margin-top: 45px;
            margin-bottom: 20px
        }

        .payment-options {
            margin-bottom:125px;
            margin-top: -25px
        }

        .payment-options span label {
            color: #696763;
            font-size: 14px;
            font-weight: 300;
            margin-right: 30px;
        }

        #cart_items .cart_info
        .table.table-condensed.total-result {
            margin-bottom: 10px;
            margin-top: 35px;
            color: #696763
        }

        #cart_items .cart_info
        .table.table-condensed.total-result tr {
            border-bottom: 0
        }

        #cart_items .cart_info
        .table.table-condensed.total-result span {
            color: #FE980F;
            font-weight: 700;
            font-size: 16px
        }

        #cart_items .cart_info
        .table.table-condensed.total-result
        .shipping-cost {
            border-bottom: 1px solid #F7F7F0;
        }
        .nice-select-one {
            -webkit-tap-highlight-color: transparent;
            background-color: #fff;
            border-radius: 5px;
            border: solid 1px #e8e8e8;
            box-sizing: border-box;
            clear: both;
            cursor: pointer;
            display: block;
            float: left;
            font-family: inherit;
            font-size: 14px;
            font-weight: normal;
            height: 42px;
            line-height: 40px;
            outline: none;
            padding-left: 18px;
            padding-right: 30px;
            position: relative;
            text-align: left !important;
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
            width: 550px;
            background-color: #F0F0E9;
        }
    </style>
    <section id="cart_items"style="zoom: 90%;">
        <div class="container">
            <!--/breadcrums-->
            <div class="breadcrumbs">
                <ol>
                    <h2 style="color: #ff7600;margin: 30px"><li class="active"> Tạo Đơn Hàng</li></h2>
                </ol>
            </div><!--/checkout-options-->

            <div class="register-req">
                <p>Làm ơn đăng ký hoặc đăng nhập để lấy hóa đơn đơn hàng và xem lại lịch sử của bạn .</p>
            </div><!--/register-req-->

            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <p>Vui lòng điền thông tin gửi hàng!</p>
                            <div class="form-one">
                                <form action="{{URL::to('/save_checkout_customer')}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="text" name="shipping_name" placeholder="Họ và tên người gửi">
                                    <input type="text" name="shipping_email" placeholder="Email*">
                                    <input type="text" name="shipping_phone" placeholder="Số điện thoại người gửi ">
                                    <input type="text" name="shipping_reciever_name" placeholder="Tên người nhận">
                                    <input type="text" name="shipping_reciever_phone" placeholder="Số điện thoại người nhận">
                                    <input type="text" name="shipping_delivery_address" placeholder="Địa chỉ nhận hàng">
                                    <input type="text" name="shipping_address" placeholder="Địa chỉ giao hàng">
                                    <select class="nice-select-one" name="shipping_category" id="Danh Mục">
                                        <option type="text" value="Chuyển phát siêu tốc">Chuyển phát siêu tốc</option>
                                        <option type="text" value="Chuyển phát tiết kiệm theo hộp">Chuyển phát tiết kiệm theo hộp</option>
                                        <option type="text" value="Chuyển phát trong ngày nội tỉnh">Chuyển phát trong ngày nội tỉnh</option>
                                        <option type="text" value="Chuyển phát hỏa tốc">Chuyển phát hỏa tốc</option>
                                        <option type="text" value="Vận chuyển dung tích lớn">Vận chuyển dung tích lớn</option>
                                        <option type="text" value="Chuyển phát tiết kiệm">Chuyển phát tiết kiệm</option>
                                    </select>

                                    <textarea name="shipping_notes"  placeholder="Ghi chú đơn hàng của bạn" rows="16"></textarea>
                                    <input type="submit" value="Gửi" name="send_order" class="btn btn-primary btn-smlg" style="width: 220px;height: 50px;background-color: #FE980F;">
                                </form>
                            </div>
                            <div class="form-two">
                                <p>Bảng Giá</p>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Quãng ĐƯờng</th>
                                        <th scope="col">cân nặng</th>
                                        <th scope="col">Giá Tiền</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Khuyến Mãi</th>
                                        <td>0 km - 5 km</td>
                                        <td>0 kg - 5 kg</td>
                                        <td>10.000 Đồng</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>5 km - 10 km</td>
                                        <td> Thấp hơn 20kg </td>
                                        <td>30.000 nghìn đồng</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td> Nội Tỉnh</td>
                                        <td> Trên 20kg </td>
                                        <td>50.000 nghìn đồng</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td> Ngoại Tỉnh</td>
                                        <td> Thấp hơn 20kg </td>
                                        <td>70.000 nghìn đồng</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td> Ngoại Tỉnh</td>
                                        <td> Trên 20kg </td>
                                        <td>100.000 nghìn đồng</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td colspan="2">Vận chuyển đƯờng biển</td>
                                        <td>200.000</td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--/#cart_items-->
@endsection
