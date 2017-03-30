<?php

use Illuminate\Database\Seeder;

class CoursewareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_ware')->insert([
            'course_id'=>mt_rand(1,20),
            'title'=>str_random(10),
            'filesize'=>mt_rand(30,100),
            'minutes'=>mt_rand(5,30),
            'display_order'=>mt_rand(1,9999),
            'video_path'=>'1.mp4',
            'attribute'=>'',
            'description'=>str_random(40),
            'created_user'=>1,
            'created_at'=>Carbon\Carbon::now(),
            'updated_at'=>Carbon\Carbon::now()
        ]);
    }
}
