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
        Schema::create('NhanVien', function (Blueprint $table) {
            $table->id('MaNV');
            $table->string('DuongDanAnh', 255);
            $table->string('TenNV', 50);
            $table->string('CCCD', 20);
            $table->date('NgaySinh');
            $table->string('GioiTinh', 10);
            $table->string('DiaChi', 255);
            $table->string('Email', 50);
            $table->string('SoDienThoai', 20);
            $table->string('Chucvu', 50);
            $table->unsignedBigInteger('MaQL');
            $table->foreign('MaQL')->references('MaQL')->on('QuanLy');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NhanVien');
    }
};
