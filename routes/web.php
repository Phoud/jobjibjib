<?php

// Admin Route

Route::group(['prefix'=>'/admin'], function(){
Route::get('/', 'AdminController@index')->name('admin.index');
Route::get('/addjob', 'AdminController@add')->name('admin.add');
Route::post('/addjob', 'AdminController@create')->name('admin.create');
Route::post('/update-job/{id}', 'AdminController@update')->name('admin.update');
Route::get('/edit-job/{id}', 'AdminController@jobEdit')->name('admin.job.edit');
Route::get('/addtag', 'AdminController@addtag')->name('admin.addtag');
Route::post('/addtag', 'AdminController@tagstore')->name('admin.tag.store');
Route::get('/alljob', 'AdminController@allJob')->name('admin.alljob');
Route::get('/tag-edit/{id}', 'AdminController@tag_edit')->name('admin.tag.edit');
Route::post('/tag-edit/{id}', 'AdminController@tagedit')->name('admin.tag.edit.store');
Route::delete('/tag-delete/{id}', 'AdminController@tagDelete')->name('admin.tag.delete');
Route::delete('/job-delete/{id}', 'AdminController@jobDelete')->name('admin.job.delete');

});

// HomePage Route
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/about', 'HomeController@about')->name('home.about');
Route::get('/contact', 'HomeController@contact')->name('home.contact');
