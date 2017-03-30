<?php

use Illuminate\Database\Seeder;

class CareerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('career')->insert([
            'name'=>str_random(8),
            'introduction'=>str_random(20),
            'description'=>str_random(40),
            'learning_nums'=>mt_rand(500,9999),
            'imgpath'=>'1.png',
            'status'=>1,
            'created_user'=>1,
            'created_at'=>Carbon\Carbon::now(),
            'updated_at'=>Carbon\Carbon::now()
        ]);
    }
}
