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
        Schema::create('KhuyenMai', function (Blueprint $table) {
            $table->increments('MaKM');
            $table->text('Mota');
            $table->date('NgayBatDau');
            $table->date('NgayKetThuc');
            $table->unsignedInteger('MaP');
            $table->unsignedInteger('MaQL');
            $table->foreign('MaP')->references('MaP')->on('Phong');
            $table->foreign('MaQL')->references('MaQL')->on('QuanLy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
