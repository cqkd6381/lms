<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Model\User::class, function (Faker\Generator $faker) {
    return [
        'username' => str_random(10),
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'mobilephone'=>18800000000 + mt_rand(1000,9999),
        'telephone'=>'0551-66666666',
        'realname'=>$faker->name,
        'qq'=>1023929000+mt_rand(1000,9999),
        'sex'=>0,
        'reg_ip'=>'192.168.1.11',
        'last_login_ip'=>'192.168.1.12',
        'type'=>1,
        'active'=>1,
        'code'=>str_random(10),
        'credential_no'=>'34012219890817'.mt_rand(1000,9999),
        'description'=>str_random(10),
        'imgpath'=>'1.png',
        'last_login_time'=>Carbon\Carbon::now(),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Model\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => factory(\App\Model\User::class)->create()->id,
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
