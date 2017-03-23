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
            $table->bigInteger('create_time')->default(0)->comment('创建时间');
            $table->bigInteger('plan_start_time')->default(0)->comment('计划开始时间');
            $table->bigInteger('plan_end_time')->default(0)->comment('计划结束时间');
            $table->integer('plan_persons')->default(0)->comment('拟定人数');
            $table->integer('teacher_id')->comment('讲师id');
            $table->integer('display_order')->default(0)->comment('排序0-9999');
            $table->integer('hours')->default(0)->comment('时长');
            $table->string('address')->default('')->comment('地点');
            $table->string('is_recommend')->default(1)->comment('是否推荐1是2否');
            $table->tinyInteger('status')->default(1)->comment('状态1开启0关闭');
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
