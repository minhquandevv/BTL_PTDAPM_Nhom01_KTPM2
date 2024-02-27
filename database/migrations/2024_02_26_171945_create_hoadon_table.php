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
        Schema::create('HOADON', function (Blueprint $table) {
            $table->id('MaHD');
            $table->unsignedBigInteger('MaKH');
            $table->unsignedBigInteger('MaNV');
            $table->unsignedBigInteger('MaP');
            $table->date('NgayDatPhong');
            $table->date('NgayTraPhong');
            $table->string('TinhTrangHoaDon', 50);

            $table->foreign('MaKH')->references('MaKH')->on('khachhang')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('MaNV')->references('MaNV')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('MaP')->references('MaP')->on('phong')->onDelete('cascade')->onUpdate('cascade');;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HOADON');
    }
};
