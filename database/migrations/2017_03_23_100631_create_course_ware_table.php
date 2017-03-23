<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseWareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_ware', function (Blueprint $table) {
            $table->increments('id')->comment('课件表');
            $table->integer('course_id')->comment('所属课程id');
            $table->integer('filesize')->comment('课件大小');
            $table->integer('display_order')->comment('排序0-9999');
            $table->integer('hours')->comment('课件时长');
            $table->string('title')->default('')->comment('课件名称');
            $table->string('video_path')->default('')->comment('课件视频路径');
            $table->string('attribute')->default('')->comment('课件属性');
            $table->text('description')->default('')->comment('课件说明');
            $table->bigInteger('create_time')->default(0)->comment('创建时间');
            $table->integer('create_user')->comment('创建人id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course_ware');
    }
}
