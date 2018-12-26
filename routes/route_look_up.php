<?php
	Route::get('/lookup','LookUpController@index')->name('look');
	Route::get('/lookup/table','LookUpController@show');
	Route::get('/lookup/add/view','LookUpController@create');
	Route::post('/lookup/add/store','LookUpController@store');
	Route::get('/lookup/edit/view/{lookUp}','LookUpController@edit');
	Route::post('/lookup/edit/update/{lookUp}','LookUpController@update');
	Route::get('/lookup/del/{lookUp}','LookUpController@destroy');