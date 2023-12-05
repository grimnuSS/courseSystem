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
        Schema::create('instructor_form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kullanıcı kimliği, başvuruyu yapan kullanıcının id'si
            $table->string('egitim_deneyimi');
            $table->string('video_deneyimi');
            $table->string('estetiklik');
            $table->string('kitleniz_buyuklugu');
            $table->string('tecrube_seviyesi');
            $table->softDeletes();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor_form');
    }
};
