<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserIntegralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_integral', function (Blueprint $table) {
            $table->increments('id')->comment('用户积分表');
            $table->integer('user_id')->comment('用户id');
            $table->integer('integral')->default(0)->comment('总积分');
            $table->string('desctiption')->default('')->comment('备注');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_integral');
    }
}
