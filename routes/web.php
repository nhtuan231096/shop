<?php

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
Route::group(['prefix' => '','namespace' => 'Home'],function()
{
//ROUTE HOME
	Route::get('/','HomeController@get_home')->name('home');
//ROUTE BLOG
	Route::get('/blog.html','HomeController@get_blog')->name('blogs');
//ROUTE BLOGS DETAIL
	Route::get('/blog-detail.html','HomeController@get_blog_detail')->name('blog-detail');
//ROUTE CONTACT
	Route::get('/contact.html','HomeController@get_contact')->name('contact');
//ROUTE LIST PRODUCTS
	Route::get('/product-list.html','HomeController@get_product_list')->name('product-list');
	//ROUTE PRODUCT DETAIL
	Route::get('/product-detail.html','HomeController@get_product_detail')->name('product-detail');
//ROUTE THE CART 
	Route::get('/cart.html','HomeController@get_cart')->name('cart');
//ROUTE CHECKOUT
	Route::get('/checkout.html','HomeController@get_checkout')->name('checkout');
//ROUTE PROFILE USERS
	Route::get('/profile.html','HomeController@get_profile')->name('profile');
//ROUTE VIEW PRODUCTS
	Route::get('//{slug}.html','HomeController@view')->name('view');
//ROUTE SEARCH PRODUCTS
	Route::get('/search','HomeController@get_search')->name('search');
	


//ROUTE ADD, DELETE, UPDATE, CLEAR THE CART 
	Route::get('/cart/add-cart/{id}.html','HomeController@add_cart')->name('add-cart');
	Route::get('/cart/view-cart.html','HomeController@view_cart')->name('view-cart');
	Route::get('/cart/delete-cart/{id}.html','HomeController@delete_cart')->name('delete-cart');
	Route::get('/cart/update-cart/{id}.html','HomeController@update_cart')->name('update-cart');
	Route::get('/cart/clear.html','HomeController@clear_cart')->name('clear-cart');

});

//ROUTE REGISTER USERS
	Route::get('/home/dangky.html','Home\AuthController@get_dangky')->name('dangky');
	Route::post('/home/dangky.html','Home\AuthController@post_dangky')->name('dangky');
//ROUTE LOGIN USERS
	Route::get('/home/dangnhap.html','Home\AuthController@get_dangnhap')->name('dangnhap');
	Route::post('/home/dangnhap.html','Home\AuthController@post_dangnhap')->name('dangnhap');
//ROUTE LOGOUT USERS
	Route::get('/home/dangxuat.html','Home\AuthController@get_dangxuat')->name('dangxuat');
//ROUTE CHANGE PASSWORD
	Route::get('/home/change.html','Home\AuthController@get_change')->name('change');
	Route::post('/home/change.html','Home\AuthController@post_change')->name('change');


Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware'=>'admin'],function()
{	
//ROUTE ADMIN
	Route::get('/','AdminController@get_admin')->name('admin');
//CATEGORYS
	include'admin/category.php';
//PRODUCTS	
	include'admin/product.php';
//ROUTE ATTRIBUTES	
	include'admin/attribute.php';
//ROUTE ACCOUNTS
	include'admin/user.php';
//ROUTE SLIDES
	include'admin/slide.php';
//ROUTE BLOGS
	include'admin/blog.php';
//ROUTE PROFILE ADMIN
	include'admin/hoso.php';
//ROUTE ĐƠN HÀNG


});

//ROUTE REGISTER ADMIN
	Route::get('admin/register.html','Admin\AdminController@get_register')->name('register');
	Route::post('admin/register.html','Admin\AdminController@post_register')->name('register');
//ROUTE LOGIN ADMIN
	Route::get('admin/login.html','Admin\AdminController@get_login')->name('login');
	Route::post('admin/login.html','Admin\AdminController@post_login')->name('login');
//ROUTE LOGOUT ADMIN
	Route::get('admin/logout.html','Admin\AdminController@get_logout')->name('logout');
	
//ROUTE ORDER
Route::group(['prefix' => 'order','namespace' => 'Home'],function()
{
	Route::get('/order.html','OrderController@order')->name('order');
	Route::post('/order.html','OrderController@post_order')->name('order');
////
	Route::get('/history.html','OrderController@order_history')->name('order_history');
	Route::get('/detail/{id}.html','OrderController@Order_detail')->name('order_detail');

	Route::get('/order-success.html','OrderController@success')->name('order-success');
	Route::get('/order-error.html','OrderController@error')->name('order-error');

});

