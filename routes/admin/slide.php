<?php //route slide
	Route::get('slide.html','SlideController@get_slide')->name('slide');
	Route::get('add-slide.html','SlideController@get_add')->name('add-slide');
	Route::post('add-slide.html','SlideController@post_add')->name('add-slide');
	Route::get('delete-slide/{id}.html','SlideController@get_delete')->name('delete-slide');
	Route::post('delete-slide/{id}.html','SlideController@post_delete')->name('delete-slide');
	Route::get('update-slide/{id}.html','SlideController@get_update')->name('update-slide');
	Route::post('update-slide/{id}.html','SlideController@post_update')->name('update-slide'); ?>