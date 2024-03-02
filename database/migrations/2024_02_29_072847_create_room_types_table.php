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
        Schema::create('LoaiPhong', function (Blueprint $table) {
            $table->id('MaLoaiPhong');
            $table->string('TenLoaiPhong', 50);
            $table->string('MoTa', 255);
            $table->integer('SoNguoiToiDa');
            $table->integer('SoGiuong');
            $table->integer('SoPhongTam');
            $table->boolean('WifiMienPhi');
            $table->boolean('TVTrongPhong');
            $table->integer('DienTichBalcon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LoaiPhong');
    }
};
