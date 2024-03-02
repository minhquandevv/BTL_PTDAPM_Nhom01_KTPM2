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
        Schema::create('lienhe', function (Blueprint $table) {
            $table->id('MaLienHe');
            $table->string('Email',50);
            $table->string('SoDT',20);
            $table->unsignedBigInteger('MaNV');
            $table->timestamps();

            $table->foreign('MaNV')->references('MaNV')->on('nhanvien');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lienhe');
    }
};
