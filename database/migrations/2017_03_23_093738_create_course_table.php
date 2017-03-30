<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id')->comment('课程表');
            $table->integer('code')->unsigned()->comment('课程编号');
            $table->string('title')->default('')->comment('课程名称');
            $table->string('imgpath')->default('')->comment('课程图片路径');
            $table->string('imgpath2')->default('')->comment('课程图片路径2');
            $table->string('introduction')->default('')->comment('课程简介');
            $table->text('description')->default('')->comment('课程描述');
            $table->integer('teacher_id')->index()->comment('讲师id');
            $table->integer('category_id')->index()->comment('课程分类id');
            $table->integer('courseware_nums')->unsigned()->comment('课件数量');
            $table->integer('learning_nums')->unsigned()->default(0)->comment('学习人数');
            $table->integer('minutes')->unsigned()->default(0)->comment('课程时长（分钟）');
            $table->tinyInteger('difficulty')->default(1)->comment('难度1初级2中级3高级');
            $table->tinyInteger('is_recommend')->default(2)->comment('是否推荐1是2否');
            $table->tinyInteger('is_latest')->default(1)->comment('是否最新1是2否');
            $table->integer('display_order')->unsigned()->default(1)->comment('排序1-9999');
            $table->decimal('fee',8,2)->default(0.00)->comment('课程费用（人民币）');
            $table->tinyInteger('status')->default(2)->comment('状态1开启2关闭');
            $table->timestamp('published_time')->comment('发布时间');
            $table->integer('created_user')->comment('创建人id');
            $table->timestamps();

            $table->unique('code');
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course');
    }
}
