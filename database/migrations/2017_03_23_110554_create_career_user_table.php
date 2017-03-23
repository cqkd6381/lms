<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_user', function (Blueprint $table) {
            $table->increments('id')->comment('路径学习表');
            $table->integer('career_id')->comment('路径id');
            $table->integer('user_id')->comment('用户id');
            $table->smallInteger('progress')->default(0)->comment('进度0-100');
            $table->bigInteger('create_time')->default(0)->comment('创建时间');
            $table->bigInteger('complete_time')->default(0)->comment('完成时间');
            $table->smallInteger('hours')->default(0)->comment('路径总时长');
            $table->smallInteger('learning_hours')->default(0)->comment('已学时长');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('career_user');
    }
}
