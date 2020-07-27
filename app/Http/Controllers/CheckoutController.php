<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if ($admin_id){
            return Redirect::to('dashboad');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function login_checkout(){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        return view('pages.checkout.login_checkout')->with('cate_product',$cate_product)->with('brand_product',$brand_product);;
    }
    public function add_customer(Request $request){
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = $request->customer_password;

        $customer_id = DB::table('tbl_customer')->insertGetId($data);

        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);
        return Redirect::to('/checkout');
    }
    public function checkout(){

        $cate_product_one = DB::table('tbl_category_product')->orderby('category_id','desc')->get();

        return view('pages.checkout.show_checkout')->with('cate_product_one',$cate_product_one);
    }
    public function save_checkout_customer(Request $request){
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_reciever_name'] = $request->shipping_reciever_name;
        $data['shipping_reciever_phone'] = $request->shipping_reciever_phone;
        $data['shipping_delivery_address'] = $request->shipping_delivery_address;
        $data['shipping_notes'] = $request->shipping_notes;
        $data['shipping_category'] = $request->shipping_category;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        Session::put('$shipping_id',$shipping_id);
        return Redirect::to('/payment');
    }



    public function all_shipping_customer(){
        $this->AuthLogin();
        $all_shipping_customer = DB::table('tbl_shipping')->get();
        $manager_shipping_customer = view('admin.all_shipping_customer')->with('all_shipping_customer',$all_shipping_customer);

        return view('admin_layout')->with('$all_shipping_customer',$manager_shipping_customer);

    }
    public function delete_shipping_customer($shipping_id){
        $this->AuthLogin();
        DB::table('tbl_shipping')->where('shipping_id',$shipping_id)->delete();
        Session::put('message','Xóa đơn hàng thành công');
        return Redirect::to('all_shipping_customer');
    }



    public function payment(){
        $payment_customer = DB::table('tbl_shipping')->orderby('shipping_id','desc')->limit(1)->get();

        return view('pages.checkout.payment')->with('payment',$payment_customer);
    }

    public function logout_checkout(){
        Session::flush();
        return Redirect::to('/login_checkout');
    }
    public function login_customer(Request $request){
        $email = $request->email_account;
        $password = $request->password_account;
        $result = DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first();

        if($result){
            Session::put('customer_id',$result->customer_id);
            return Redirect::to('/checkout');
        }else{
            return Redirect::to('/login_checkout');
        }
    }
}
