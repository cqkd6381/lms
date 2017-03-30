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
            $table->integer('user_id')->index()->comment('用户id');
            $table->integer('goods_id')->index()->comment('商品id');
            $table->string('goods_name')->default('')->comment('商品名称');
            $table->integer('goods_months')->default(0)->comment('商品可用月份');
            $table->decimal('goods_price',8,2)->default(0.00)->comment('商品价格');
            $table->timestamp('start_time')->comment('开始时间,从付款成功开始');
            $table->timestamp('expire_time')->comment('到期时间');
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
        Schema::drop('user_goods');
    }
}
