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
            $table->integer('user_integral_id')->index()->comment('积分表id');
            $table->tinyInteger('integral_status')->comment('积分操作1添加积分2消费积分');
            $table->integer('integral_value')->default(0)->comment('积分');
            $table->smallInteger('integral_content')->comment('积分内容1登录积分2看视频积分3购买积分');
            $table->string('description')->default('')->comment('备注');
            $table->timestamps();

            $table->foreign('user_integral_id')->references('id')->on('user_integral')->onDelete('cascade');
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
