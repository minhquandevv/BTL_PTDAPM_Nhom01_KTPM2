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
        Schema::create('YeuThich', function (Blueprint $table) {
            $table->increments('MaYT');
            $table->unsignedInteger('MaKH');
            $table->unsignedInteger('MaP');
            $table->date('NgayThemVao');
            $table->foreign('MaKH')->references('MaKH')->on('KhachHang');
            $table->foreign('MaP')->references('MaP')->on('Phong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favourites');
    }
};
