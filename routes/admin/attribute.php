<?php 
//route attribute
	Route::get('attribute.html','AttributeController@get_attribute')->name('attribute');
	Route::get('add-attribute.html','AttributeController@get_add')->name('add-attribute');
	Route::post('add-attribute.html','AttributeController@post_add')->name('add-attribute');
	Route::get('delete-attribute/{id}.html','AttributeController@get_delete')->name('delete-attribute');
	Route::post('delete-attribute/{id}.html','AttributeController@post_delete')->name('delete-attribute');
	Route::get('update-attribute/{id}.html','AttributeController@get_update')->name('update-attribute');
	Route::post('update-attribute/{id}.html','AttributeController@post_update')->name('update-attribute');
	
	
 ?>