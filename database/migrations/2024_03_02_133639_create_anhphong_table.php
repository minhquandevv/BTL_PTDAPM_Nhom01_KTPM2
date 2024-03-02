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
        Schema::create('anhphong', function (Blueprint $table) {
            $table->id('MaAnh');
            $table->unsignedBigInteger('MaPhong');
            $table->string('DuongDanAnh');
            $table->timestamps();

            $table->foreign('MaPhong')->references('MaP')->on('phong');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anhphong');
    }
};
