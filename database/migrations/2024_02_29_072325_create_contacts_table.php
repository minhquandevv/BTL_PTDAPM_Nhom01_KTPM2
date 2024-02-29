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
        Schema::create('LienHe', function (Blueprint $table) {
            $table->increments('MaLienHe');
            $table->string('Email', 255);
            $table->string('SoDT', 20);
            $table->unsignedInteger('MaQL');
            $table->unsignedInteger('MaNV');
            $table->foreign('MaQL')->references('MaQL')->on('QuanLy');
            $table->foreign('MaNV')->references('MaNV')->on('NhanVien');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
