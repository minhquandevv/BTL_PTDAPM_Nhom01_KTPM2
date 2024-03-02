<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('YeuThich', function (Blueprint $table) {
            $table->id('MaYT');
            $table->unsignedBigInteger('MaKH');
            $table->unsignedBigInteger('MaP');
            $table->date('NgayThemVao');
            $table->foreign('MaP')->references('MaP')->on('Phong');
            $table->foreign('MaKH')->references('MaKH')->on('KhachHang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('YeuThich');
    }
};
