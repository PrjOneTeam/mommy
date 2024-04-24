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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('workbook_id')->unsigned();
            $table->enum('workbook_color', ['bw', 'color', 'both'])->nullable();
            $table->bigInteger('pdf_id')->nullable();
            $table->enum('pdf_color', ['bw', 'color'])->nullable();
            $table->float('price');
            $table->float('sale_price');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('workbook_id')->references('id')->on('workbooks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
