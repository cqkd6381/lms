<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_login', function (Blueprint $table) {
            $table->increments('id')->comment('用户登录表');
            $table->integer('user_id')->comment('用户id');
            $table->char('login_ip',16)->default('')->comment('登录ip');
            $table->bigInteger('login_time')->default(0)->comment('登录时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_login');
    }
}
