<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('NHANVIEN', function (Blueprint $table) {
            $table->id('MaNV');
            $table->string('TenNV');
            $table->string('CCCD', 20);
            $table->date('NgaySinh');
            $table->string('GioiTinh', 10);
            $table->string('DiaChi');
            $table->string('Email');
            $table->string('SoDienThoai', 20);
            $table->string('Chucvu', 50);
            $table->unsignedBigInteger('MaQL');
            $table->foreign('MaQL')->references('MaQL')->on('quanly')->onDelete('cascade')->onUpdate('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NHANVIEN');
    }
};
