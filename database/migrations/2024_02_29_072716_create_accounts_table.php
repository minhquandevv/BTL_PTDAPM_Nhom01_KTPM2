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
        Schema::create('TaiKhoan', function (Blueprint $table) {
            $table->id('MaTK');
            $table->string('TenDangNhap', 50);
            $table->string('MatKhau', 255);
            $table->unsignedBigInteger('MaLoaiTK');
            $table->foreign('MaLoaiTK')->references('MaLoaiTK')->on('LoaiTaiKhoan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TaiKhoan');
    }
};