<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training', function (Blueprint $table) {
            $table->increments('id')->comment('线下课程表');
            $table->string('title')->default('')->comment('课程名称');
            $table->string('introduction')->default('')->comment('课程简介');
            $table->text('description')->default('')->comment('课程描述');
            $table->string('objective')->default('')->comment('课程对象');
            $table->timestamp('plan_start_time')->comment('计划开始时间');
            $table->timestamp('plan_end_time')->comment('计划结束时间');
            $table->integer('plan_persons')->unsigned()->default(0)->comment('拟定人数');
            $table->string('teacher_id')->comment('讲师列表');
            $table->integer('display_order')->unsigned()->default(1)->comment('排序1-9999');
            $table->integer('minutes')->default(0)->comment('时长');
            $table->string('address')->default('')->comment('地点');
            $table->string('is_recommend')->default(1)->comment('是否推荐1是2否');
            $table->tinyInteger('status')->default(2)->comment('状态1开启2关闭');
            $table->timestamp('published_time')->comment('发布时间');
            $table->integer('created_user')->comment('创建人id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('training');
    }
}
