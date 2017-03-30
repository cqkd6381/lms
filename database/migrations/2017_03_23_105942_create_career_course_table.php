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
            $table->integer('course_id')->index()->comment('课程id');
            $table->integer('career_id')->index()->comment('路径id');
            $table->bigInteger('created_user')->comment('创建人id');//是否应该加这一字段？
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('course')->onDelete('cascade');
            $table->foreign('career_id')->references('id')->on('career')->onDelete('cascade');
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
