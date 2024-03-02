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
        Schema::create('yeuthich', function (Blueprint $table) {
            $table->id('MaYT');
            $table->unsignedBigInteger('MaKH');
            $table->unsignedBigInteger('MaP');
            $table->date('NgayThemVao');
            $table->timestamps();

            $table->foreign('MaP')->references('MaP')->on('phong');
            $table->foreign('MaKH')->references('MaKH')->on('khachhang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yeuthich');
    }
};
