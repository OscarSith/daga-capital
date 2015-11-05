<?php

Route::get('/', 'WelcomeController@index');
Route::get('{title}/{id}', ['as' => 'showBlog', 'uses' => 'WelcomeController@blog']);
Route::post('send', 'WelcomeController@send');

Route::get('home', 'HomeController@index');
Route::put('edit-post-{id}', ['as' => 'editPost', 'uses' => 'HomeController@edit']);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
