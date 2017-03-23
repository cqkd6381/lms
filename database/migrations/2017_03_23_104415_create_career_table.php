<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career', function (Blueprint $table) {
            $table->increments('id')->comment('职业路径表');
            $table->string('name')->default('')->comment('路径名称');
            $table->string('introduction')->default('')->comment('路径介绍');
            $table->string('description')->default('')->comment('路径描述');
            $table->integer('learning_nums')->default(0)->comment('学习人数');
            $table->string('tags')->default('')->comment('标签如PHP|Yii');
            $table->string('imgpath')->default('')->comment('路径图片');
            $table->tinyInteger('status')->default(1)->comment('状态1开启0关闭');
            $table->bigInteger('create_time')->default(0)->comment('创建时间');
            $table->bigInteger('create_user')->comment('创建人id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('career');
    }
}
