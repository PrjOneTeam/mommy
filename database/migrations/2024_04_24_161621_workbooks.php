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
        Schema::create('workbooks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->boolean('color_pick')->default(false);
            $table->string('image_bw')->nullable();
            $table->string('image_color')->nullable();
            $table->string('image_both')->nullable();
            $table->boolean('status')->default(true);
            $table->string('files_bw')->nullable();
            $table->string('files_color')->nullable();
            $table->string('file_both')->nullable();
            $table->string('size')->nullable();
            $table->string('file_format')->default('PDF');
            $table->float('price')->nullable();
            $table->float('price_both')->nullable();
            $table->float('sale_price')->nullable();
            $table->float('sale_price_both')->nullable();
            $table->enum('grade', ['preschool', 'kindergarten'])->nullable();
            $table->json('topic')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workbooks');
    }
};
