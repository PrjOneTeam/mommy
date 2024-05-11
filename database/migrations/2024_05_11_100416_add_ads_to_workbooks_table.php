<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdsToWorkbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workbooks', function (Blueprint $table) {
            $table->integer('ads')->default(0)->after('color_pick');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workbooks', function (Blueprint $table) {
            $table->dropColumn('ads');
        });
    }
}
