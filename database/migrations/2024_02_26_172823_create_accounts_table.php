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
        Schema::create('TaiKHoan', function (Blueprint $table) {
            $table->increments('MaTK');
            $table->unsignedInteger('MaLoaiTK');
            $table->string('TenDangNhap', 255);
            $table->string('MatKhau', 255);
            $table->foreign('MaLoaiTK')->references('MaLoaiTK')->on('LoaiTaiKhoan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
