<?php 
//route san pham
	Route::get('product.html','ProductController@get_product')->name('product');
	Route::get('add-product.html','ProductController@get_add')->name('add-product');
	Route::post('add-product.html','ProductController@post_add')->name('add-product');
	Route::get('delete-product/{id}.html','ProductController@get_delete')->name('delete-product');
	Route::post('delete-product/{id}.html','ProductController@post_delete')->name('delete-product');
	Route::get('update-product/{id}.html','ProductController@get_update')->name('update-product');
	Route::post('update-product/{id}.html','ProductController@post_update')->name('update-product');
	Route::get('pro-del-img/{id}.html','ProductController@del_img')->name('pro-del-img');

 ?>