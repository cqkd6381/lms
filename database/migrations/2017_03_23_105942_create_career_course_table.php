<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_course', function (Blueprint $table) {
            $table->increments('id')->comment('路径-课程联系表');
            $table->integer('course_id')->comment('课程id');
            $table->integer('career_id')->comment('路径id');
            $table->bigInteger('create_time')->comment('创建时间');
            $table->bigInteger('create_user')->comment('创建人id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('career_course');
    }
}
