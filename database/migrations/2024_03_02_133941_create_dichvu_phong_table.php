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
        Schema::create('dichvu_phong', function (Blueprint $table) {
            $table->id('MaDichVuPhong');
            $table->unsignedBigInteger('MaPhong');
            $table->unsignedBigInteger('MaDichVu');
            $table->timestamps();

            $table->foreign('MaPhong')->references('MaP')->on('phong');
            $table->foreign('MaDichVu')->references('MaDV')->on('dichvu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dichvu_phong');
    }
};
