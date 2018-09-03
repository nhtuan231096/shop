<?php 
//route hồ sơ
	Route::get('hoso.html','HoSoController@get_hoso')->name('hoso');
	Route::get('add-hoso.html','HoSoController@get_add')->name('add-hoso');
	Route::post('add-hoso.html','HoSoController@post_add')->name('add-hoso');
	Route::get('delete-hoso/{id}.html','HoSoController@get_delete')->name('delete-hoso');
	Route::post('delete-hoso/{id}.html','HoSoController@post_delete')->name('delete-hoso');
	Route::get('update-hoso/{id}.html','HoSoController@get_update')->name('update-hoso');
	Route::post('update-hoso/{id}.html','HoSoController@post_update')->name('update-hoso');
 ?>