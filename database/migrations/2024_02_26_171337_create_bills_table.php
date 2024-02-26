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
        Schema::create('HoaDon', function (Blueprint $table) {
            $table->increments('MaHD');
            $table->unsignedInteger('MaKH');
            $table->unsignedInteger('MaNV');
            $table->unsignedInteger('MaP');
            $table->date('NgayDatPhong');
            $table->date('NgayTraPhong');
            $table->string('TinhTrangHoaDon', 50);
            $table->foreign('MaKH')->references('MaKH')->on('KhachHang');
            $table->foreign('MaNV')->references('MaNV')->on('NhanVien');
            $table->foreign('MaP')->references('MaP')->on('Phong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
