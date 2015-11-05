<?php

Route::get('/', 'WelcomeController@index');
Route::get('{title}/{id}', ['as' => 'showBlog', 'uses' => 'WelcomeController@blog']);
Route::post('send', 'WelcomeController@send');

Route::get('admin', 'HomeController@index');
Route::put('edit-post-{id}', ['as' => 'editPost', 'uses' => 'HomeController@edit']);
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');
