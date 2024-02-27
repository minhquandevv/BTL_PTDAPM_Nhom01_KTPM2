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
        Schema::create('DANHGIA', function (Blueprint $table) {
            $table->id('MaDG');
            $table->unsignedBigInteger('MaKH');
            $table->unsignedBigInteger('MaP');
            $table->string('LoaiDanhGia', 50);
            $table->text('NhanXet');

            $table->foreign('MaKH')->references('MaKH')->on('khachhang')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('MaP')->references('MaP')->on('phong')->onDelete('cascade')->onUpdate('cascade');;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DANHGIA');
    }
};
