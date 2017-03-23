<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_comment', function (Blueprint $table) {
            $table->increments('id')->comment('课程评论表');
            $table->integer('user_id')->comment('用户id');
            $table->integer('course_id')->comment('课程id');
            $table->text('comment')->default('')->comment('评论内容');
            $table->bigInteger('create_time')->default(0)->comment('评论时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course_comment');
    }
}
