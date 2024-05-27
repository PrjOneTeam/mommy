<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeGradeColumnTypeInWorkbooksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('workbooks', function (Blueprint $table) {
            $table->string('grade')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('workbooks', function (Blueprint $table) {
            $table->enum('grade', ['preschool', 'kindergarten'])->nullable()->change();
        });
    }
};
