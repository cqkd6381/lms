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
	//后台首页
	Route::get('index','IndexController@index')->name('admin');

	//用户管理
	Route::resource('user','UserController');

	//课程管理
	Route::resource('course','CourseController');
	Route::get('coursedelete/{id}','CourseController@get_course_delete')->name('get_course_delete');

	//课件管理
	Route::get('courseware/{course_id}','CoursewareController@get_coursewarelist')->name('get_coursewarelist');
	Route::get('courseware/{course_id}/show/{id}','CoursewareController@get_show_courseware')->name('get_show_courseware');

	Route::get('courseware/{course_id}/create','CoursewareController@get_create_courseware')->name('get_create_courseware');
	Route::post('courseware/{course_id}','CoursewareController@post_store_courseware')->name('post_store_courseware');

	Route::get('courseware/{course_id}/edit/{id}','CoursewareController@get_edit_courseware')->name('get_edit_courseware');
	Route::post('courseware/{course_id}/update/{id}','CoursewareController@post_update_courseware')->name('post_update_courseware');

	Route::get('courseware/{course_id}/delete/{id}','CoursewareController@get_delete_courseware')->name('get_delete_courseware');

	//路径管理
	Route::resource('career','CareerController');
	Route::get('careerdelete/{id}','CareerController@get_career_delete')->name('get_career_delete');

	//路径-课程管理
	Route::get('careercourse/{id}','CareerController@get_careercourse')->name('get_careercourse');
	Route::get('careercoursedelete/{id}','CareerController@get_careercourse_delete')->name('get_careercourse_delete');
	Route::get('courselist/{id}','CareerController@get_courselist')->name('get_courselist');
	Route::post('ajax_career_course','CareerController@ajax_career_course')->name('ajax_career_course');
	// Route::get('')->name();


});
