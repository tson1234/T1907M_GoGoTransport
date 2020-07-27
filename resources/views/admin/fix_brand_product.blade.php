@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    chỉnh sửa phân loại Hàng
                </header>
                <?php
                $message = Session::get('message');
                if ($message){
                    echo $message;
                    Session::put('message',null);
                }
                ?>
                <div class="panel-body">
                    @foreach($all_brand_product as $key => $fix_value)
                        <div class="position-center">
                            <form role="form" action="{{url('/update_brand_product/'.$fix_value->brand_id)}}" method="post">
                                {{csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Loại hàng</label>
                                    <input type="text" value="{{$fix_value ->brand_name}}" name="brand_product_name" class="form-control"
                                           id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả </label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="brand_product_desc"
                                              id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$fix_value ->brand_desc}}</textarea>
                                </div>


                                <button type="submit"name="add_brand_product" class="btn btn-info">Cập nhật danh mục </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection

