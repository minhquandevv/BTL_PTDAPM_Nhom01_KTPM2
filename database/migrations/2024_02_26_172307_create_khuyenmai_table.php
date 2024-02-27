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
        Schema::create('KHUYENMAI', function (Blueprint $table) {
            $table->id('MaKM');
            $table->text('Mota');
            $table->date('NgayBatDau');
            $table->date('NgayKetThuc');
            $table->unsignedBigInteger('MaP');
            $table->unsignedBigInteger('MaQL');

            $table->foreign('MaP')->references('MaP')->on('phong')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('MaQL')->references('MaQL')->on('quanly')->onDelete('cascade')->onUpdate('cascade');;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('KHUYENMAI');
    }
};
