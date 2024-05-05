<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCustomersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->json('role')->nullable()->change();
            $table->json('subject_prefer')->nullable()->change();
            $table->json('grade_teacher')->nullable()->change();
            $table->string('color_prefer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('role', 255)->nullable()->change();
            $table->string('subject_prefer', 255)->nullable()->change();
            $table->string('grade_teacher', 255)->nullable()->change();
            $table->dropColumn('color_prefer');
        });
    }
};
