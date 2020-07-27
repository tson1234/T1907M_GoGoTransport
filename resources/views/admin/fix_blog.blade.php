@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    chỉnh sửa bài viết
                </header>
                <?php
                $message = Session::get('message');
                if ($message){
                    echo $message;
                    Session::put('message',null);
                }
                ?>
                <div class="panel-body">
                    @foreach($all_blog as $key => $fix_value)
                    <div class="position-center">
                        <form role="form" action="{{url('/update_blog/'.$fix_value->blog_id)}}" method="post" enctype="multipart/form-data">
                            {{csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên bài viết</label>
                                <input type="text" value="{{$fix_value ->blog_name}}" name="blog_name" class="form-control"
                                       id="exampleInputEmail1" placeholder="Tên bài viết">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">hình ảnh minh họa</label>
                                <input type="file" name="blog_image" class="form-control" id="exampleInputEmail1">
                                <img src="{{URL::to('public/uploads/blog/'.$fix_value->blog_image)}}" width=100 height=100>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">nội dung bài viết</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="blog_desc"
                                          id="exampleInputPassword1" placeholder="nội dung bài viết">{{$fix_value ->blog_desc}}</textarea>
                            </div>

                            <button type="submit"name="add_blog" class="btn btn-info">Cập nhật bài viết</button>

                        </form>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection
