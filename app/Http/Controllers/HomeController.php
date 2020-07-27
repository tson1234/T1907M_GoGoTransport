<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $all_blog = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->get();

        $all_comment_one = DB::table('tbl_comment')->orderby('comment_id','desc')->get();

        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_blog',$all_blog)->with('all_comment_one',$all_comment_one);
    }
    public function about(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $all_blog = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->get();

        $all_comment_two = DB::table('tbl_comment')->orderby('comment_id','desc')->get();

        return view('pages.about')->with('category',$cate_product)->with('brand',$brand_product)->with('all_blog',$all_blog)->with('all_comment_two',$all_comment_two);
    }
    public function service(){

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $all_blog = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->get();

        return view('pages.service')->with('category',$cate_product)->with('brand',$brand_product)->with('all_blog',$all_blog);
    }
    public function contact(){
        return view('pages.contact');
    }
    public function new(){

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $all_blog = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->get();

        $all_blog_two = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->limit(3)->get();

        return view('pages.new')->with('category',$cate_product)->with('brand',$brand_product)->with('all_blog',$all_blog)->with('all_blog_two',$all_blog_two);
    }
    public function detailNew(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $all_blog = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->limit(1)->get();

        $all_blog_one = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->get();

        $blog_comment_one = DB::table('tbl_blog_comment')->get();

        return view('pages.detail_new')->with('category',$cate_product)
            ->with('brand',$brand_product)->with('all_blog',$all_blog)
            ->with('blog_comment_one',$blog_comment_one)
            ->with('all_blog_one',$all_blog_one);
    }
    public function search(Request $request){

        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();

        $all_blog = DB::table('tbl_blog')->where('blog_status','1')->orderby('blog_id','desc')->get();

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();


        return view('pages.sanpham.search')->with('category',$cate_product)->with('brand',$brand_product)->with('all_blog',$all_blog)
            ->with('search_product',$search_product);
    }
}
