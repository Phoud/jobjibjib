<?php

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/about', 'HomeController@about')->name('home.about');
Route::get('/contact', 'HomeController@contact')->name('home.contact');
