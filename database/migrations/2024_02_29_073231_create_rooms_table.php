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
        Schema::create('Phong', function (Blueprint $table) {
            $table->id('MaP');
            $table->string('TenPhong', 50);
            $table->string('GioiThieuPhong', 255);
            $table->decimal('DonGia', 18, 2);
            $table->string('TinhTrang', 50);
            $table->boolean('ViewHuongBien');
            $table->boolean('CoBonTamNgoi');
            $table->integer('KichThuoc');
            $table->unsignedBigInteger('MaLoaiPhong');
            $table->integer('SoNguoiToiDa');
            $table->integer('SoGiuong');
            $table->integer('SoPhongTam');
            $table->boolean('WifiMienPhi');
            $table->boolean('TVTrongPhong');
            $table->integer('DienTichBalcon');
            $table->foreign('MaLoaiPhong')->references('MaLoaiPhong')->on('LoaiPhong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Phong');
    }
};
