<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_goods', function (Blueprint $table) {
            $table->increments('id')->comment('已付款订单，判断用户权限（持久化存储）');
            $table->string('order_number')->comment('订单号');
            $table->integer('user_id')->comment('用户id');
            $table->integer('goods_id')->comment('商品id');
            $table->string('goods_name')->default('')->comment('商品名称');
            $table->integer('goods_months')->default(0)->comment('商品可用月份');
            $table->decimal('goods_price',8,2)->default(0.00)->comment('商品价格');
            $table->bigInteger('start_time')->default(0)->comment('开始时间,从付款成功开始');
            $table->bigInteger('expire_time')->default(0)->comment('到期时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_goods');
    }
}
