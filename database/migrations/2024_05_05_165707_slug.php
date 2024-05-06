<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('slugs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->bigInteger('workbook_id')->nullable()->unsigned();
            $table->bigInteger('pdf_id')->nullable()->unsigned();

            $table->foreign('workbook_id')->references('id')->on('workbooks')->onDelete('cascade');
            $table->foreign('pdf_id')->references('id')->on('pdfs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slugs');
    }
};
