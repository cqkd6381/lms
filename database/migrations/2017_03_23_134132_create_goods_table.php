<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id')->comment('商品表');
            $table->string('goods_name')->default('')->comment('商品名称');
            $table->string('goods_imgpath')->default('')->comment('商品图片路径');
            $table->decimal('goods_price',8,2)->default(0.00)->comment('商品单价');
            $table->integer('goods_months')->default(0)->comment('商品可用月份1、2、3、6、12、24、36个月');
            $table->tinyInteger('status')->default(0)->comment('商品状态1开启0关闭');
            $table->string('description')->default('')->comment('商品描述');
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
        Schema::drop('goods');
    }
}
