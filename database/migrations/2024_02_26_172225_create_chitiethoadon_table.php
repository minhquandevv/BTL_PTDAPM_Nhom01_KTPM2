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
        Schema::create('CHITIETHOADON', function (Blueprint $table) {
            $table->id('MaCTHD');
            $table->unsignedBigInteger('MaHD');
            $table->unsignedBigInteger('MaDV');
            $table->integer('SoLuong');

            $table->foreign('MaHD')->references('MaHD')->on('hoadon')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('MaDV')->references('MaDV')->on('dichvu')->onDelete('cascade')->onUpdate('cascade');;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CHITIETHOADON');
    }
};
