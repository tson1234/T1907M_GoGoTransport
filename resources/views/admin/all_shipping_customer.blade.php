@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt Kê Phản Hồi
            </div>

            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if ($message){
                    echo $message;
                    Session::put('message',null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Tên người gửi</th>
                        <th>Email</th>
                        <th>SĐT người gửi</th>
                        <th>Tên người nhận</th>
                        <th>SĐT người nhận</th>
                        <th>Địa chỉ nhận hàng</th>
                        <th>Địa chỉ giao hàng</th>
                        <th>Ghi chú đơn hàng</th>
                        <th>danh mục</th>
                        <th style="width:30px;">xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_shipping_customer as $key => $value)
                        <tr>
                            <td>{{$value->shipping_name}}</td>
                            <td>{{$value->shipping_email}}</td>
                            <td>{{$value->shipping_phone}}</td>
                            <td>{{$value->shipping_reciever_name}}</td>
                            <td>{{$value->shipping_reciever_phone}}</td>
                            <td>{{$value->shipping_address}}</td>
                            <td>{{$value->shipping_delivery_address}}</td>
                            <td>{{$value->shipping_notes}}</td>
                            <td>{{$value->shipping_category}}</td>
                            <td>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa bài viêt này không?')" href="{{url('/delete_shipping_customer/'.$value ->shipping_id)}}" class="active styling-edit" style="font-size: 20px;" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

@endsection
