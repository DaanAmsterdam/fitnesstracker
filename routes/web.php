<?php

Route::get('/', 'PageController@index');
Route::get('/dashboard', 'PageController@dashboard')->name('dashboard');

Auth::routes();

Route::resource('rides', 'rideController');
Route::resource('practices', 'practiceController');
