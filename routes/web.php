<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::get('/tim-kiem','HomeController@search');

// Các chức năng của trang chủ
Route::get('/danh-muc-san-pham/{category_id}','CategoryProduct@show_category_home');

Route::get('/about','HomeController@about');
Route::get('/service','HomeController@service');
Route::get('/contact','HomeController@contact');
Route::get('/new','HomeController@new');
Route::get('/detail_new','HomeController@detailNew');


//Backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/dashboard','AdminController@dashboard');

//Category Product
Route::get('/add_category_product','CategoryProduct@add_category_product');
Route::get('/fix_category_product/{category_product_id}','CategoryProduct@fix_category_product');
Route::get('/delete_category_product/{category_product_id}','CategoryProduct@delete_category_product');
Route::get('/all_category_product','CategoryProduct@all_category_product');

Route::get('/active_category_product/{category_product_id}','CategoryProduct@active_category_product');
Route::get('/unactive_category_product/{category_product_id}','CategoryProduct@unactive_category_product');


Route::post('/save_category_product','CategoryProduct@save_category_product');
Route::post('/update_category_product/{category_product_id}','CategoryProduct@update_category_product');

//Brand Product
Route::get('/add_brand_product','BrandProduct@add_brand_product');
Route::get('/fix_brand_product/{brand_product_id}','BrandProduct@fix_brand_product');
Route::get('/delete_brand_product/{brand_product_id}','BrandProduct@delete_brand_product');
Route::get('/all_brand_product','BrandProduct@all_brand_product');

Route::get('/active_brand_product/{brand_product_id}','BrandProduct@active_brand_product');
Route::get('/unactive_brand_product/{brand_product_id}','BrandProduct@unactive_brand_product');


Route::post('/save_brand_product','BrandProduct@save_brand_product');
Route::post('/update_brand_product/{brand_product_id}','BrandProduct@update_brand_product');


//Product
Route::get('/add_product','ProductController@add_product');
Route::get('/fix_product/{product_id}','ProductController@fix_product');
Route::get('/delete_product/{product_id}','ProductController@delete_product');
Route::get('/all_product','ProductController@all_product');

Route::get('/active_product/{product_id}','ProductController@active_product');
Route::get('/unactive_product/{product_id}','ProductController@unactive_product');


Route::post('/save_product','ProductController@save_product');
Route::post('/update_product/{product_id}','ProductController@update_product');

//Blog
Route::get('/add_blog','BlogController@add_blog');
Route::get('/fix_blog/{blog_id}','BlogController@fix_blog');
Route::get('/delete_blog/{blog_id}','BlogController@delete_blog');
Route::get('/all_blog','BlogController@all_blog');

Route::get('/active_blog/{blog_id}','BlogController@active_blog');
Route::get('/unactive_blog/{blog_id}','BlogController@unactive_blog');


Route::post('/save_blog','BlogController@save_blog');
Route::post('/update_blog/{blog_id}','BlogController@update_blog');

//comment blog customer
Route::post('/save_comment_customer','BlogCommentController@save_comment_customer');
Route::post('/save_blog_comment_customer','BlogCommentController@save_blog_comment_customer');
Route::get('/all_blog_comment_customer','BlogCommentController@all_blog_comment_customer');

Route::get('/all_blog_comment','BlogCommentController@all_blog_comment');
Route::get('/delete_blog_comment/{comment_id}','BlogCommentController@delete_blog_comment');



Route::get('/delete_blog_comment_customer/{blog_comment_id}','BlogCommentController@delete_blog_comment_customer');

//checkout
Route::get('/login_checkout','CheckoutController@login_checkout');
Route::get('/logout_checkout','CheckoutController@logout_checkout');
Route::post('/add_customer','CheckoutController@add_customer');
Route::post('/login_customer','CheckoutController@login_customer');

Route::get('/all_shipping_customer','CheckoutController@all_shipping_customer');
Route::get('/delete_shipping_customer/{shipping_id}','CheckoutController@delete_shipping_customer');

Route::get('/checkout','CheckoutController@checkout');
Route::get('/payment','CheckoutController@payment');
Route::post('/save_checkout_customer','CheckoutController@save_checkout_customer');




//add customer product
Route::post('/add_customer_product','CheckoutController@add_customer');

