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
    </style>
    <section id="cart_items"style="zoom: 90%;">
        <div class="container">
            <!--/breadcrums-->
            <!--/checkout-options-->
            <div class="review-payment">
                <h2 style="color: #ff7600; margin: 100px 0px 20px -100px;font-size: 30px" >Xem lại đơn hàng</h2>
            </div>
            <table class="table" style="margin-left:-150px;width: 1500px;">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Tên người gửi</th>
                    <th scope="col">Email</th>
                    <th scope="col">SĐT người gửi</th>
                    <th scope="col">Tên người nhận</th>
                    <th scope="col">SĐT người nhận</th>
                    <th scope="col">Địa chỉ nhận </th>
                    <th scope="col">Địa chỉ giao </th>
                    <th scope="col">Đanh mục</th>
                    <th scope="col">Ghi chú </th>
                </tr>
                </thead>
                <tbody>
                @foreach($payment as $key => $payment_customer)
                <tr style="height: 200px">
                    <th scope="row">{{$payment_customer->shipping_id}}</th>
                    <td>{{$payment_customer->shipping_name}}</td>
                    <td>{{$payment_customer->shipping_email}}</td>
                    <td>{{$payment_customer->shipping_phone}}</td>
                    <td>{{$payment_customer->shipping_reciever_name}}</td>
                    <td>{{$payment_customer->shipping_reciever_phone}}</td>
                    <td>{{$payment_customer->shipping_address}}</td>
                    <td>{{$payment_customer->shipping_delivery_address}}</td>
                    <td>{{$payment_customer->shipping_category}}</td>
                    <td>{{$payment_customer->shipping_notes}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section> <!--/#cart_items-->
@endsection
