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
        Schema::create('DichVuPhong', function (Blueprint $table) {
            $table->increments('MaDichVuPhong');
            $table->unsignedInteger('MaPhong');
            $table->unsignedInteger('MaDichVu');
            $table->foreign('MaPhong')->references('MaP')->on('Phong');
            $table->foreign('MaDichVu')->references('MaDV')->on('DichVu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_rooms');
    }
};
