@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Chỉnh sửa danh mục hàng hóa
                </header>
                <?php
                $message = Session::get('message');
                if ($message){
                    echo $message;
                    Session::put('message',null);
                }
                ?>
                <div class="panel-body">
                    @foreach($all_category_product as $key => $fix_value)
                    <div class="position-center">
                        <form role="form" action="{{url('/update_category_product/'.$fix_value->category_id)}}" method="post">
                            {{csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Đơn Hàng</label>
                                <input type="text" value="{{$fix_value ->category_name}}" name="category_product_name" class="form-control"
                                       id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả danh mục</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="category_product_desc"
                                          id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$fix_value ->category_desc}}</textarea>
                            </div>


                            <button type="submit"name="add_category_product" class="btn btn-info">Cập nhật danh mục</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection

