<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id')->comment('订单表');
            $table->string('order_number')->default('')->comment('订单号');
            $table->integer('user_id')->index()->comment('用户id');
            // $table->integer('goods_id')->comment('商品id');
            $table->char('phone',20)->default('')->comment('联系电话');
            $table->decimal('fee',8,2)->default(0.00)->comment('订单金额');
            $table->tinyinteger('is_pay')->default(0)->comment('是否付款0未支付1已支付');
            $table->timestamps();

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
        Schema::drop('order');
    }
}
