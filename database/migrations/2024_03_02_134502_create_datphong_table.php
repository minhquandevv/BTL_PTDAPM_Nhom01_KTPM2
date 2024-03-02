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
        Schema::create('datphong', function (Blueprint $table) {
            $table->id('MaDatPhong');
            $table->unsignedBigInteger('MaKH');
            $table->unsignedBigInteger('MaPhong');
            $table->date('NgayDatPhong');
            $table->date('NgayCheckIn');
            $table->date('NgayCheckOut');
            $table->integer('SoNguoi');
            $table->string('TinhTrangDatPhong',50);
            $table->string('TinhTrangThanhToan',50);
            $table->timestamps();

            $table->foreign('MaKH')->references('MaKH')->on('khachhang');
            $table->foreign('MaPhong')->references('MaP')->on('phong');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datphong');
    }
};
