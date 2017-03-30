<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('用户表');
            $table->string('username')->comment('用户名');
            $table->string('email')->comment('邮箱');
            $table->string('password')->comment('密码');
            $table->bigInteger('mobilephone')->unsigned()->comment('手机号');
            $table->char('telephone',20)->comment('座机');
            $table->char('realname',50)->comment('真实姓名');
            $table->bigInteger('qq')->unsigned()->comment('qq号码');
            $table->tinyInteger('sex')->default(0)->comment('性别0保密1男2女');
            $table->char('reg_ip',16)->default('')->comment('注册IP');
            $table->char('last_login_ip',16)->default('')->comment('最后登录IP');
            $table->tinyInteger('type')->default(1)->comment('用户类型1学员2讲师3管理员');
            $table->tinyInteger('active')->default(1)->comment('是否启用1启用2关闭');
            $table->string('code')->default('')->comment('用户编号');
            $table->string('credential_no',20)->default('')->comment('身份证号码');
            $table->string('description')->default('')->comment('备注');
            $table->string('imgpath')->default('')->comment('头像路径');
            $table->timestamp('last_login_time')->comment('最后登录时间');
            // $table->integer('integral_id')->comment('积分表id');
            $table->timestamps();

            $table->unique('username');
            $table->unique('email');
            $table->unique('credential_no');
            $table->unique('mobilephone');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
