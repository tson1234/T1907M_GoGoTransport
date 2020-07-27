@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt Kê Loại Hàng
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
                        <th style="width:20px;">

                        </th>
                        <th>Tên Loại Hàng</th>
                        <th>Mô tả</th>
                        <th>Hiển thị</th>
                        <th>Chức năng</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_brand_product as $key => $brand_pro)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td>{{$brand_pro->brand_name}}</td>
                            <td>{{$brand_pro->brand_desc}}</td>
                            <td>
                            <span class="text-ellipsis">
                                <?php
                                if( $brand_pro->brand_status ==1){
                                ?>
                                    <a href="{{url('/active_brand_product/'.$brand_pro ->brand_id)}}">
                                        <span class="fa-thumb-styling fa fa-thumbs-up" style="font-size: 28px;color: green;"></span></a>
                                <?php
                                }
                                else{
                                ?>
                                    <a href="{{url('/unactive_brand_product/'.$brand_pro ->brand_id)}}">
                                        <span class="fa-thumb-styling fa fa-thumbs-down" style="font-size: 28px;color: red;"></span></a>
                                <?php
                                }
                                ?>
                            </span>
                            </td>
                            <td>
                                <a href="{{url('/fix_brand_product/'.$brand_pro ->brand_id)}}" class="active styling-edit" style="font-size: 20px;" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa đơn hàng này không?')" href="{{url('/delete_brand_product/'.$brand_pro ->brand_id)}}" class="active styling-edit" style="font-size: 20px;" ui-toggle-class="">
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
