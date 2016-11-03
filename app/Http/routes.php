<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Get Page
Route::get('/','PageController@getpageHome');

Route::get('/pages/rule','PageController@getpageRule');
Route::get('/pages/newrule','RuleController@newrule');

Route::get('/pages/showpro','PageController@showallprofessor');

Route::get('/inf','PageController@getpageInf');
Route::get('/contact','PageController@getpageContact');
Route::get('/professor','PageController@getpageProfessor');
Route::get('/reqrule','PageController@getpageReqRule');
Route::get('admin','PageController@getAdminControl');


Route::get('/condb','PageController@ConDB');
Route::get('/conmydb','PageController@ConMyDB');


