<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if ($admin_id){
            return Redirect::to('dashboad');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_product(){
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        return view('admin.add_product')->with('cate_product',$cate_product)->with('brand_product',$brand_product);
    }
    public function all_product(){
        $this->AuthLogin();
        $all_product = DB::table('tbl_product')
            ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
            ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
            ->orderby('tbl_product.product_id','desc')->get();
        $manager_product = view('admin.all_product')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.all_product',$manager_product);
    }
    public function save_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request ->product_name;
        $data['product_price'] = $request ->product_price;
        $data['product_desc'] = $request ->product_desc;
        $data['product_content'] = $request ->product_content;
        $data['category_id'] = $request ->product_cate;
        $data['brand_id'] = $request ->product_brand;
        $data['product_status'] = $request ->product_status;
        $data['product_image'] = $request ->product_status;
        $get_image = $request->file('product_image');
        if ($get_image){
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message','Thêm hình ảnh thành công');
            return Redirect::to('all_product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm danh mục đơn hàng không thành công');
        return Redirect::to('add_product');
    }
    public function unactive_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message',' kích hoạt danh mục đơn hàng thành công');
        return Redirect::to('all_product');
    }
    public function active_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','Không kích hoạt danh mục đơn hàng thành công');
        return Redirect::to('all_product');
    }
    public function fix_product($product_id){
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        $fix_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        $manager_product = view('admin.fix_product')->with('fix_product',$fix_product)
            ->with('cate_product',$cate_product)
        ->with('brand_product',$brand_product);
        return view('admin_layout')->with('admin.fix_product',$manager_product);
    }
    public function update_product(Request $request,$product_id){
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request ->product_name;
        $data['product_price'] = $request ->product_price;
        $data['product_desc'] = $request ->product_desc;
        $data['product_content'] = $request ->product_content;
        $data['category_id'] = $request ->product_cate;
        $data['brand_id'] = $request ->product_brand;
        $data['product_status'] = $request ->product_status;
        $get_image = $request->file('product_image');
        if ($get_image){
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id',$product_id)->update();
            Session::put('message','Thêm danh mục đơn hàng thành công');
            return Redirect::to('all_product');
        }
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm danh mục đơn hàng không thành công');
        return Redirect::to('all_product');
    }
    public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','Xóa danh mục đơn hàng thành công');
        return Redirect::to('all_product');
    }
}
