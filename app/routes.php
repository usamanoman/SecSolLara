<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','HomeController@index');
Route::get('/user/login',array('as'=>'user.login','uses'=>'UsersController@login'));
Route::resource('user', 'UsersController');
Route::resource('forum', 'ForumsController');
Route::resource('topic', 'TopicsController');
Route::resource('reply', 'RepliesController');
