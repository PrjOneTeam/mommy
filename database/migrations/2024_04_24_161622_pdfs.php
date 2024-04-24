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
        Schema::create('pdfs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('grade', ['preschool', 'kindergarten'])->nullable();
            $table->json('topic')->nullable();
            $table->string('image_bw');
            $table->string('image_color')->nullable();
            $table->boolean('status')->default(true);
            $table->string('files_bw');
            $table->string('files_color')->nullable();
            $table->float('price');
            $table->string('sale_price')->nullable();
            $table->json('related_workbook')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdfs');
    }
};
