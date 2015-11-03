<?php

Route::get('/', 'WelcomeController@index');
Route::get('blog', 'WelcomeController@blog');
Route::post('send', 'WelcomeController@send');

Route::get('home', 'HomeController@index');
Route::get('edit-post-{id}', ['as' => 'editPost', 'uses' => 'HomeController@edit']);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
