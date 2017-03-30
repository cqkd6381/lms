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
            $table->integer('career_id')->index()->comment('路径id');
            $table->integer('user_id')->index()->comment('用户id');
            $table->smallInteger('minutes')->default(0)->comment('路径总时长');
            $table->smallInteger('learning_hours')->default(0)->comment('已学时长');
            $table->timestamp('completed_time')->comment('完成时间');
            $table->timestamps();

            $table->foreign('career_id')->references('id')->on('career')->onDelete('cascade');
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
        Schema::drop('career_user');
    }
}
