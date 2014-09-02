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
Route::get('/',array('as'=>'home','uses'=>'HomeController@index'));
Route::get('/user/login',array('as'=>'user.login','uses'=>'UsersController@login'));
Route::get('/user/dashboard',array('as'=>'user.panel','uses'=>'UsersController@panel'));
Route::get('/user/logout',array('as'=>'user.logout','uses'=>'UsersController@logout'));
Route::get('/user/createAdmin',array('as'=>'user.create_admin','uses'=>'UsersController@createAdmin'));
Route::post('/user/createAdmin',array('as'=>'user.storeAdmin','uses'=>'UsersController@storeAdmin'));
Route::post('/user/login',array('as'=>'user.postlogin','uses'=>'UsersController@postlogin'));
Route::resource('user', 'UsersController');
Route::resource('forum', 'ForumsController');
Route::resource('job', 'JobsController');
Route::resource('topic', 'TopicsController');
Route::resource('reply', 'RepliesController');
