@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Sửa Đơn Hàng
                </header>
                <?php
                $message = Session::get('message');
                if ($message){
                    echo $message;
                    Session::put('message',null);
                }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{url('/update_product')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Đơn Hàng </label>
                                <input type="text" name="product_name" class="form-control"
                                       id="exampleInputEmail1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">giá vận chuyển Đơn Hàng </label>
                                <input type="text" name="product_price" class="form-control"
                                       id="exampleInputEmail1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">hình ảnh mô tả gói hàng </label>
                                <input type="file" name="product_image" class="form-control"
                                       id="exampleInputEmail1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả đơn hàng </label>
                                <textarea style="resize: none" rows="8" class="form-control" name="product_desc"
                                          id="exampleInputPassword1" placeholder="Mô tả đơn hàng"></textarea>
                            </div><div class="form-group">
                                <label for="exampleInputPassword1">Nội dung đơn hàng </label>
                                <textarea style="resize: none" rows="8" class="form-control" name="product_content"
                                          id="exampleInputPassword1" placeholder="Mô tả đơn hàng"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                <select name="product_cate" class="form-control input-sm m-bot15">
                                    @foreach($cate_product as $key =>$cate)

                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Loại hàng hóa</label>
                                <select name="product_brand" class="form-control input-sm m-bot15">
                                    @foreach($brand_product as $key =>$brand)

                                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>

                            <button type="submit"name="add_product" class="btn btn-info">Cập nhật đơn hàng </button>

                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
