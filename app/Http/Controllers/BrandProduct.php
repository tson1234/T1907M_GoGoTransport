<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BrandProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if ($admin_id){
            return Redirect::to('dashboad');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_brand_product(){
        $this->AuthLogin();
        return view('admin.add_brand_product');
    }

    public function all_brand_product(){
        $this->AuthLogin();
        $all_brand_product = DB::table('tbl_brand')->get();
        $manager_brand_product = view('admin.all_brand_product')->with('all_brand_product',$all_brand_product);
        return view('admin_layout')->with('admin.all_brand_product',$manager_brand_product);
    }
    public function save_brand_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['brand_name'] = $request ->brand_product_name;
        $data['brand_desc'] = $request ->brand_product_desc;
        $data['brand_status'] = $request ->brand_product_status;

        DB::table('tbl_brand')->insert($data);
        Session::put('message','Thêm danh mục thành công');
        return Redirect::to('add_brand_product');
    }
    public function unactive_brand_product($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>1]);
        Session::put('message',' kích hoạt danh mục đơn hàng thành công');
        return Redirect::to('all_brand_product');
    }
    public function active_brand_product($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>0]);
        Session::put('message','Không kích hoạt danh mục đơn hàng thành công');
        return Redirect::to('all_brand_product');
    }

    public function fix_brand_product($brand_product_id){
        $this->AuthLogin();
        $fix_brand_product = DB::table('tbl_brand')->where('brand_id',$brand_product_id)->get();
        $manager_brand_product = view('admin.fix_brand_product')->with('all_brand_product',$fix_brand_product);
        return view('admin_layout')->with('admin.fix_brand_product',$manager_brand_product);
    }

    public function update_brand_product(Request $request,$brand_product_id){
        $this->AuthLogin();
        $data = array();
        $data['brand_name'] = $request ->brand_product_name;
        $data['brand_desc'] = $request ->brand_product_desc;
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update($data);
        Session::put('message','Cập nhật danh mục đơn hàng thành công');
        return Redirect::to('all_brand_product');
    }
    public function delete_brand_product($brand_product_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->delete();
        Session::put('message','Xóa danh mục đơn hàng thành công');
        return Redirect::to('all_brand_product');
    }
}
