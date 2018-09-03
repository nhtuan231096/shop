<?php 
//route tai khoan
	Route::get('user.html','UserController@get_user')->name('user');
	Route::get('add-user.html','UserController@get_add')->name('add-user');
	Route::post('add-user.html','UserController@post_add')->name('add-user');
	Route::get('delete-user/{id}.html','UserController@get_delete')->name('delete-user');
	Route::post('delete-user/{id}.html','UserController@post_delete')->name('delete-user');
	Route::get('update-user/{id}.html','UserController@get_update')->name('update-user');
	Route::post('update-user/{id}.html','UserController@post_update')->name('update-user');
 ?>