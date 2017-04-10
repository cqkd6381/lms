<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsChargeToCourseWareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_ware', function (Blueprint $table) {
            $table->tinyInteger('is_charge')->default(1)->comment('是否收费1收费2免费');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_ware', function (Blueprint $table) {
            $table->dropColumn('is_charge');
        });
    }
}
