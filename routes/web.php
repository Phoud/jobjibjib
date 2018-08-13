<?php

// Admin Route

Route::group(['prefix'=>'/admin'], function(){
Route::get('/', 'AdminController@index')->name('admin.index');
Route::get('/addjob', 'AdminController@add')->name('admin.add');
Route::post('/addjob', 'AdminController@create')->name('admin.create');
Route::get('/addtag', 'AdminController@addtag')->name('admin.addtag');
Route::post('/addtag', 'AdminController@tagstore')->name('admin.tag.store');
});

// HomePage Route
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/about', 'HomeController@about')->name('home.about');
Route::get('/contact', 'HomeController@contact')->name('home.contact');
