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

// Route::get('/', function () {
//     return view('welcome');
// });
//七牛云存储
Route::any('qiniu/auth','QiniuController@auth');
Route::any('qiniu/upload','QiniuController@upload');

/*前台*/
//课程
Route::get('/','IndexController@index')->name('index');
Route::get('course/{id}','IndexController@course')->name('course');

Route::get('scene','IndexController@scene')->name('scene');


//职业路径
Route::get('career','IndexController@career')->name('career');
Route::get('class/{id}','IndexController@class')->name('class');



/*后台*/
Route::group(['namespace' => 'Admin','prefix' => 'admin'], function(){
	Route::get('index','IndexController@index');

});
