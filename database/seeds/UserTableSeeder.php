<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt(str_random(10)),
            'mobilephone'=>18800000000 + mt_rand(1000,9999),
            'telephone'=>'0551-66666666',
            'realname'=>str_random(6),
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
            'created_at'=>Carbon\Carbon::now(),
            'updated_at'=>Carbon\Carbon::now()
        ]);
    }
}
