<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_user', function (Blueprint $table) {
            $table->increments('id')->comment('线下报名表');
            $table->integer('training_id')->index()->comment('线下课程id');
            $table->integer('user_id')->comment('用户id');
            $table->tinyInteger('is_pass')->default(0)->comment('审核状态0待审核1通过2未通过');
            $table->tinyInteger('is_attend')->default(2)->comment('是否出勤1是2否');
            $table->timestamps();

            $table->foreign('training_id')->references('id')->on('training')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('training_user');
    }
}
