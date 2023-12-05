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
        Schema::create('sale_courses', function (Blueprint $table) {
            $table->id();
            $table->integer('courseId');
            $table->date('endSaleDate');
            $table->integer('saleDiscount');
            $table->integer('salePrice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('sale_courses');
    }
};
