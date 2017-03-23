<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id')->comment('课程分类表');
            $table->string('name')->default('')->comment('分类名称');
            $table->string('description')->default('')->comment('分类介绍');
            $table->bigInteger('create_time')->default(0)->comment('创建时间');
            $table->integer('create_user')->comment('创建人id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category');
    }
}
