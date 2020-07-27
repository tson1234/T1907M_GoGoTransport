<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BlogController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if ($admin_id){
            return Redirect::to('dashboad');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_blog(){
        $this->AuthLogin();
        return view('admin.add_blog');
    }

    public function all_blog(){
        $this->AuthLogin();
        $all_blog = DB::table('tbl_blog')->orderby('blog_id','desc')->get();
        $manager_blog = view('admin.all_blog')->with('all_blog',$all_blog);
        return view('admin_layout')->with('admin.all_blog',$manager_blog);
    }
    public function save_blog(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['blog_name'] = $request ->blog_name;
        $data['blog_image'] = $request ->blog_image;
        $data['blog_desc'] = $request ->blog_desc;
        $data['blog_status'] = $request ->blog_status;
        $get_image = $request->file('blog_image');
        if ($get_image){
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/blog',$new_image);
            $data['blog_image'] = $new_image;
            DB::table('tbl_blog')->insert($data);
            Session::put('message','Thêm hình ảnh thành công');
            return Redirect::to('all_blog');
        }
        $data['product_image'] = '';
        DB::table('tbl_blog')->insert($data);
        Session::put('message','Thêm danh mục đơn hàng không thành công');
        return Redirect::to('add_product');
    }
    public function unactive_blog($blog_id){
        $this->AuthLogin();
        DB::table('tbl_blog')->where('blog_id',$blog_id)->update(['blog_status'=>1]);
        Session::put('message',' kích hoạt danh mục đơn hàng thành công');
        return Redirect::to('all_blog');
    }
    public function active_blog($blog_id){
        $this->AuthLogin();
        DB::table('tbl_blog')->where('blog_id',$blog_id)->update(['blog_status'=>0]);
        Session::put('message','Không kích hoạt danh mục đơn hàng thành công');
        return Redirect::to('all_blog');
    }

    public function fix_blog($blog_id){
        $this->AuthLogin();
        $fix_blog = DB::table('tbl_blog')->where('blog_id',$blog_id)->get();
        $manager_blog = view('admin.fix_blog')->with('all_blog',$fix_blog);
        return view('admin_layout')->with('admin.fix_blog',$manager_blog);
    }

    public function update_blog(Request $request,$blog_id){
        $this->AuthLogin();
        $data = array();
        $data['blog_name'] = $request ->blog_name;
        $data['blog_desc'] = $request ->blog_desc;
        DB::table('tbl_blog')->where('blog_id',$blog_id)->update($data);
        Session::put('message','Cập nhật bài viết thành công');
        return Redirect::to('all_blog');
    }
    public function delete_blog($blog_id){
        $this->AuthLogin();
        DB::table('tbl_blog')->where('blog_id',$blog_id)->delete();
        Session::put('message','Xóa danh bài viết thành công');
        return Redirect::to('all_blog');
    }

}

