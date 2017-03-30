<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
        	'code'=>mt_rand(10000,99999),
        	'title'=>str_random(5),
        	'imgpath'=>'1.png',
        	'imgpath2'=>'',
        	'introduction'=>str_random(20),
        	'description'=>str_random(40),
        	'teacher_id'=>1,
        	'category_id'=>1,
        	'courseware_nums'=>0,
        	'learning_nums'=>mt_rand(0,9999),
        	'minutes'=>mt_rand(80,400),
        	'difficulty'=>mt_rand(1,3),
        	'is_recommend'=>1,
        	'is_latest'=>1,
        	'display_order'=>mt_rand(1,9999),
        	'fee'=>mt_rand(20,500),
        	'status'=>1,
        	'published_time'=>Carbon\Carbon::now(),
        	'created_user'=>1,
            'created_at'=>Carbon\Carbon::now(),
            'updated_at'=>Carbon\Carbon::now()
        ]);
    }
}
