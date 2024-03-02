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
        Schema::create('DanhGia', function (Blueprint $table) {
            $table->id('MaDanhGia');
            $table->unsignedBigInteger('MaDatPhong');
            $table->integer('DiemDanhGia');
            $table->string('NhanXet', 255);
            $table->foreign('MaDatPhong')->references('MaDatPhong')->on('DatPhong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DanhGia');
    }
};
