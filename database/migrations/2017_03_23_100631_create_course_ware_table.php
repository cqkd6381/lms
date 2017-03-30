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
            $table->integer('course_id')->index()->comment('所属课程id');
            $table->string('title')->default('')->comment('课件名称');
            $table->integer('filesize')->unsigned()->comment('课件大小');
            $table->integer('minutes')->unsigned()->comment('课件时长');
            $table->integer('display_order')->unsigned()->default(1)->comment('排序1-9999');
            $table->string('video_path')->default('')->comment('课件视频路径');
            $table->string('attribute')->default('')->comment('课件属性');
            $table->text('description')->default('')->comment('课件说明');
            $table->integer('created_user')->comment('创建人id');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('course')->onDelete('cascade');
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
