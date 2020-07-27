<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BlogCommentController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if ($admin_id){
            return Redirect::to('dashboad');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    //blog comment

    public function save_comment_customer(Request $request){
        $data = array();
        $data['comment_name'] = $request->comment_name;
        $data['comment_email'] = $request->comment_email;
        $data['comment_content'] = $request->comment_content;
        $data['comment_theme'] = $request->comment_theme;

        $comment_id = DB::table('tbl_comment')->insertGetId($data);
        Session::put('comment_id',$comment_id);
        return Redirect('/contact');
    }
    public function save_blog_comment_customer(Request $request){
        $data = array();
        $data['blog_comment_name'] = $request->blog_comment_name;
        $data['blog_comment_email'] = $request->blog_comment_email;
        $data['blog_comment_content'] = $request->blog_comment_content;

        $blog_comment_id = DB::table('tbl_blog_comment')->insertGetId($data);
        Session::put('blog_comment_id',$blog_comment_id);
        return Redirect('/detail_new');
    }



    public function all_blog_comment_customer(){
        $this->AuthLogin();
        $all_blog_comment_customer = DB::table('tbl_blog_comment')->get();
        $manager_blog_comment_customer = view('admin.all_blog_comment_customer')->with('all_blog_comment_customer',$all_blog_comment_customer);

        return view('admin_layout')->with('all_blog_comment_customer',$manager_blog_comment_customer);

    }


    public function delete_blog_comment_customer($blog_comment_id){
        $this->AuthLogin();
        DB::table('tbl_blog_comment')->where('blog_comment_id',$blog_comment_id)->delete();
        Session::put('message','Xóa comment thành công');
        return Redirect::to('all_blog_comment_customer');
    }

    public function all_blog_comment(){
        $this->AuthLogin();
        $all_blog_comment = DB::table('tbl_comment')->get();
        $manager_blog_comment = view('admin.all_blog_comment')->with('all_blog_comment',$all_blog_comment);

        return view('admin_layout')->with('all_blog_comment_customer',$manager_blog_comment);

    }
    public function delete_blog_comment($comment_id){
        $this->AuthLogin();
        DB::table('tbl_comment')->where('comment_id',$comment_id)->delete();
        Session::put('message','Xóa comment thành công');
        return Redirect::to('all_blog_comment');
    }


}
