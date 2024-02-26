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
        Schema::create('Phong', function (Blueprint $table) {
            $table->increments('MaP');
            $table->string('TenPhong', 255);
            $table->text('GioiThieuPhong');
            $table->decimal('DonGia', 18, 2);
            $table->string('TinhTrang', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
