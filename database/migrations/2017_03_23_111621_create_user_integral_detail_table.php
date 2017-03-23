<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserIntegralDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_integral_detail', function (Blueprint $table) {
            $table->increments('id')->comment('用户积分明细表');
            $table->integer('user_id')->comment('用户id');
            $table->tinyInteger('integral_status')->comment('积分状态1添加积分2消费积分');
            $table->integer('integral_value')->default(0)->comment('积分');
            $table->smallInteger('integral_content')->comment('积分内容1登录积分2看视频积分3购买积分');
            $table->bigInteger('create_time')->default(0)->comment('创建时间');
            $table->string('description')->default('')->comment('备注');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_integral_detail');
    }
}
