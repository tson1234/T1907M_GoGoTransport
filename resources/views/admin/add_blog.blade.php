@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm bài viết
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
                        <form role="form" action="{{url('/save_blog')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên bài viết</label>
                                <input type="text" name="blog_name" class="form-control"
                                       id="exampleInputEmail1" placeholder="Tên bài viết">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">hình ảnh minh họa</label>
                                <input type="file" name="blog_image" class="form-control"
                                       id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">nội dung bài viết</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="blog_desc"
                                          id="exampleInputPassword1" placeholder="nội dung bài viết"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="blog_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>

                            <button type="submit"name="add_blog" class="btn btn-info">Thêm bài viết</button>

                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
