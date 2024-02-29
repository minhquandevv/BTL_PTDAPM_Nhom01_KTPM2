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
        Schema::create('QuanLy', function (Blueprint $table) {
            $table->increments('MaQL');
            $table->string('TenQL');
            $table->string('CCCD', 20);
            $table->string("img", 255);
            $table->date('NgaySinh');
            $table->string('GioiTinh', 10);
            $table->string('DiaChi', 255);
            $table->string('Email', 255);
            $table->string('SoDienThoai', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managers');
    }
};
