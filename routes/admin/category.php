<?php 
//route danh muc san pham
	Route::get('category.html','CategoryController@get_category')->name('category');
	Route::get('add-category.html','CategoryController@get_add')->name('add-category');
	Route::post('add-category.html','CategoryController@post_add')->name('add-category');
	Route::get('delete-category/{id}.html','CategoryController@get_delete')->name('delete-category');
	Route::post('delete-category/{id}.html','CategoryController@post_delete')->name('delete-category');
	Route::get('update-category/{id}.html','CategoryController@get_update')->name('update-category');
	Route::post('update-category/{id}.html','CategoryController@post_update')->name('update-category');
 ?>