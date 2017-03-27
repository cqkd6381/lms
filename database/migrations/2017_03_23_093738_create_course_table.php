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
            $table->string('code')->default('')->comment('课程编号');
            $table->string('title')->default('')->comment('课程名称');
            $table->string('imgpath')->default('')->comment('课程图片路径');
            $table->string('imgpath2')->default('')->comment('课程图片路径2');
            $table->string('introduction')->default('')->comment('课程简介');
            $table->text('description')->default('')->comment('课程描述');
            $table->integer('teacher_id')->comment('讲师id');
            $table->integer('courseware_num')->comment('课件数量');
            $table->integer('hours')->default(0)->comment('课程时长（小时）');
            $table->string('categorys')->comment('课程分类id');
            $table->tinyInteger('difficulty')->default(1)->comment('难度1初级2中级3高级');
            $table->tinyInteger('is_recommend')->default(2)->comment('是否推荐1是2否');
            $table->tinyInteger('is_latest')->default(1)->comment('是否最新1是2否');
            $table->integer('display_order')->default(0)->comment('排序0-9999');
            $table->decimal('fee',8,2)->default(0.00)->comment('课程费用（人民币）');
            $table->tinyInteger('status')->default(1)->comment('状态1开启2关闭');
            $table->bigInteger('create_time')->default(0)->comment('创建时间');
            $table->bigInteger('publish_time')->default(0)->comment('发布时间');
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
        Schema::drop('course');
    }
}
