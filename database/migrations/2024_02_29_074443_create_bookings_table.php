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
        Schema::create('DatPhong', function (Blueprint $table) {
            $table->id('MaDatPhong');
            $table->unsignedBigInteger('MaKH');
            $table->unsignedBigInteger('MaPhong');
            $table->date('NgayDatPhong');
            $table->date('NgayCheckIn');
            $table->date('NgayCheckOut');
            $table->integer('SoNguoi');
            $table->string('TinhTrangDatPhong', 50);
            $table->string('TinhTrangThanhToan', 50);
            $table->foreign('MaKH')->references('MaKH')->on('KhachHang');
            $table->foreign('MaPhong')->references('MaP')->on('Phong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
