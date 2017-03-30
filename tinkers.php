<?php

/**
*使用tinker创建测试数据
*
*/

/**
*users
*唯一索引字段username\email\credential_no\mobilephone
*/
$user=App\Model\User::create(['username'=>str_random(10),'email'=>str_random(10).'@gmail.com','password'=>bcrypt('secret'),'mobilephone'=>'18888888888','telephone'=>'0551-66666666','realname'=>'约翰列侬','qq'=>'1023939158','sex'=>0,'reg_ip'=>'192.168.1.11','last_login_ip'=>'192.168.1.12','type'=>1,'active'=>'1','code'=>time(),'credential_no'=>'340122198908172400','description'=>'this is a description','imgpath'=>'1.png','last_login_time'=>Carbon\Carbon::now()]);

/**
*category
*
*/
$category=App\Model\Category::create(['name'=>'WEBSAVE','description'=>'WEBSAVE','created_user'=>1]);


/**
*course
*唯一索引字段code
*/
$course = App\Model\Course::create(['code'=>'1000001','title'=>'bigdata','imgpath'=>'1.png','imgpath2'=>'','introduction'=>'bigdata','description'=>'bigdata','teacher_id'=>1,'category_id'=>1,'courseware_nums'=>8,'
learning_nums'=>800,'minutes'=>566,'difficulty'=>1,'is_recommend'=>1,'is_latest'=>1,'display_order'=>1,'fee'=>56.00,'status'=>1,'published_time'=>Carbon\Carbon::now(),'created_user'=>1]);