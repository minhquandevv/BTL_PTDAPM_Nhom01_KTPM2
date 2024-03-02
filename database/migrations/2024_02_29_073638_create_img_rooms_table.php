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
        Schema::create('img_rooms', function (Blueprint $table) {
            $table->id('MaAnh');
            $table->unsignedBigInteger('MaPhong');
            $table->string('DuongDanAnh', 255);
            $table->foreign('MaPhong')->references('MaP')->on('Phong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('img_rooms');
    }
};
