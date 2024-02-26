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
        Schema::create('HoaDonChiTiet', function (Blueprint $table) {
            $table->increments('MaCTHD');
            $table->unsignedInteger('MaHD');
            $table->unsignedInteger('MaDV');
            $table->integer('SoLuong');
            $table->foreign('MaHD')->references('MaHD')->on('HoaDon');
            $table->foreign('MaDV')->references('MaDV')->on('DichVu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_details');
    }
};
