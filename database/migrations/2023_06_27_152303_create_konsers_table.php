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
        Schema::create('konsers', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('image')->nullable();
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('harga');
            $table->integer('kuota');
            $table->integer('sisakuota');
            $table->string('tempat');
            $table->string('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsers');
    }
};
