<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_user', function (Blueprint $table) {
            $table->increments('id')->comment('用户-课程学习表');
            $table->integer('user_id')->unsigned()->comment('用户id');
            $table->integer('course_id')->unsigned()->comment('课程id');
            $table->smallInteger('progress')->default(0)->comment('学习进度0-100');
            $table->tinyInteger('learn_status')->default(1)->comment('学习状态1学习中2已完成');
            $table->bigInteger('last_learning_time')->comment('上次学习时间');
            $table->bigInteger('complete_time')->comment('完成时间');
            $table->bigInteger('total_learning_time')->default(0)->comment('总学时（小时）');
            $table->bigInteger('create_time')->default(0)->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course_user');
    }
}
