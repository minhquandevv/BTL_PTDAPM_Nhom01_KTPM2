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
        Schema::create('YEUTHICH', function (Blueprint $table) {
            $table->id('MaYT');
            $table->unsignedBigInteger('MaKH');
            $table->unsignedBigInteger('MaP');
            $table->date('NgayThemVao');

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
        Schema::dropIfExists('YEUTHICH');
    }
};
