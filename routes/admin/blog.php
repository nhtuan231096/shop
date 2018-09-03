<?php 
//route blog
	Route::get('blog.html','BlogController@get_blog')->name('blog');
	Route::get('add-blog.html','BlogController@get_add')->name('add-blog');
	Route::post('add-blog.html','BlogController@post_add')->name('add-blog');
	Route::get('delete-blog/{id}.html','BlogController@get_delete')->name('delete-blog');
	Route::post('delete-blog/{id}.html','BlogController@post_delete')->name('delete-blog');
	Route::get('update-blog/{id}.html','BlogController@get_update')->name('update-blog');
	Route::post('update-blog/{id}.html','BlogController@post_update')->name('update-blog');
 ?>