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
        Schema::create('KHACHHANG', function (Blueprint $table) {
            $table->id('MaKH');
            $table->string('TenKH');
            $table->string('CCCD', 20);
            $table->date('NgaySinh');
            $table->string('GioiTinh', 10);
            $table->string('DiaChi');
            $table->string('Email');
            $table->string('SoDienThoai', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('KHACHHANG');
    }
};
