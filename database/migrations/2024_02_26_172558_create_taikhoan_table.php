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
        Schema::create('TAIKHOAN', function (Blueprint $table) {
            $table->id('MaTK');
            $table->unsignedBigInteger('MaLoaiTK');
            $table->string('TenDangNhap');
            $table->string('MatKhau');
            $table->timestamps();

            $table->foreign('MaLoaiTK')->references('MaLoaiTK')->on('loaitaikhoan')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TAIKHOAN');
    }
};
