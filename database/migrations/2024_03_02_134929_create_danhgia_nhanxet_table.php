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
        Schema::create('danhgia_nhanxet', function (Blueprint $table) {
            $table->id('MaDanhGia');
            $table->unsignedBigInteger('MaDatPhong');
            $table->integer('DiemDanhGia');
            $table->text('NhanXet');
            $table->timestamps();

            $table->foreign('MaDatPhong')->references('MaDatPhong')->on('datphong');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danhgia_nhanxet');
    }
};
