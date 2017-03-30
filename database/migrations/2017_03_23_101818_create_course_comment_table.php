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
            $table->integer('user_id')->index()->comment('用户id');
            $table->integer('course_id')->index()->comment('课程id');
            $table->text('comment')->default('')->comment('评论内容');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('course')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
