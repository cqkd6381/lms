<?php

//Route::get('/',function(){
//    return view('home.repository');
//});
//七牛云存储
Route::any('qiniu/index','QiniuController@index');
Route::any('qiniu/upload','QiniuController@upload');


// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/register', 'UserController@getRegister');
Route::post('/register', 'UserController@postRegister');
Route::get('/code/{username}/{code}','UserController@code');

/*前台*/
//课程
Route::get('/{type?}','IndexController@index')->where('type','[1-3]')->name('index');
Route::get('course/{id}','IndexController@course')->name('course');
Route::get('video/{id}','IndexController@video')->name('video');

Route::get('scene','IndexController@scene')->name('scene');
Route::post('commentStore','AjaxController@commentStore')->name('ajax_comment');

//职业路径
Route::get('career','IndexController@career')->name('career');
Route::get('class/{id}','IndexController@classs')->name('class');

Route::group(['middleware'=>'auth'],function(){
    //VIP商品页面
    Route::get('vip','IndexController@vip')->name('vip');

});



/*后台*/
Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware'=>'admin'], function(){
	//后台首页
	Route::get('index','IndexController@index')->name('admin');
	Route::get('profile','IndexController@profile')->name('profile');

	//用户管理
	Route::resource('user','UserController');

	//课程管理
	Route::resource('course','CourseController');
	Route::get('coursedelete/{id}','CourseController@get_course_delete')->name('get_course_delete');

	//分类管理
	Route::resource('category','CategoryController');
	Route::get('categorydelete/{id}','CategoryController@get_category_delete')->name('get_category_delete');


    //课件管理
    Route::get('courseware/{course_id}','CoursewareController@get_coursewarelist')->name('get_coursewarelist');
    Route::get('courseware/{course_id}/show/{id}','CoursewareController@get_show_courseware')->name('get_show_courseware');

    Route::get('courseware/{course_id}/create','CoursewareController@get_create_courseware')->name('get_create_courseware');
    Route::post('courseware/{course_id}','CoursewareController@post_store_courseware')->name('post_store_courseware');

    Route::get('courseware/{course_id}/edit/{id}','CoursewareController@get_edit_courseware')->name('get_edit_courseware');
    Route::put('courseware/{course_id}/update/{id}','CoursewareController@put_update_courseware')->name('put_update_courseware');

    Route::get('courseware/{course_id}/delete/{id}','CoursewareController@get_delete_courseware')->name('get_delete_courseware');

    //路径管理
    Route::resource('career','CareerController');
    Route::get('careerdelete/{id}','CareerController@get_career_delete')->name('get_career_delete');
    //路径-子分类管理
    Route::get('careerCategory/{id}','CareerController@careerCategory')->name('admin.career.career_category');
    Route::get('createCategory/{id}','CareerController@createCategory')->name('admin.career.create_category');
    Route::post('storeCategory','CareerController@storeCategory')->name('admin.career.store_category');
    Route::get('editCategory/{id}/edit','CareerController@editCategory')->name('admin.career.edit_category');
    Route::put('updateCategory/{id}','CareerController@updateCategory')->name('admin.career.update_category');
    //路径-课程管理
	Route::get('careercourse/{id}','CareerController@get_careercourse')->name('get_careercourse');
	Route::get('careercoursedelete/{id}','CareerController@get_careercourse_delete')->name('get_careercourse_delete');
	Route::get('courselist/{id}','CareerController@get_courselist')->name('get_courselist');
	
	//ajax请求
	Route::any('ajax_career_course','AjaxController@ajax_career_course')->name('ajax_career_course');
	Route::any('ajax_change_course_status','AjaxController@ajax_change_course_status')->name('ajax_change_course_status');
	Route::any('ajax_change_course_ware_charge','AjaxController@ajax_change_course_ware_charge')->name('ajax_change_course_ware_charge');

	// Route::get('')->name();

});



//测试路由

Route::resource('posts','PostsController');