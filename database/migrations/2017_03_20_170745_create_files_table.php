<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->comment('用户唯一标示');
            $table->string('fname')->comment('文件的显示名');
            $table->string('key')->comment('文件对应到云存储服务中的唯一标识');
            $table->integer('create_time')->comment('上传时间');
            $table->string('description')->comment('文件的描述内容');
            $table->foreign('uid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('files');
    }
}
