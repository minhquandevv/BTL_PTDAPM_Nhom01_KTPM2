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
            $table->increments('MaDanhGia');
            $table->unsignedInteger('MaDatPhong');
            $table->integer('DiemDanhGia');
            $table->string('NhanXet', 255);
            $table->foreign('MaDatPhong')->references('MaDatPhong')->on('DatPhong');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluates');
    }
};
