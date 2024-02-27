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
        Schema::create('LIENHE', function (Blueprint $table) {
            $table->id('MaLienHe');
            $table->string('Email');
            $table->string('SoDT');
            $table->unsignedBigInteger('MaQL');
            $table->unsignedBigInteger('MaNV');
            $table->timestamps();

            $table->foreign('MaQL')->references('MaQL')->on('quanly')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('MaNV')->references('MaNV')->on('nhanvien')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LIENHE');
    }
};
