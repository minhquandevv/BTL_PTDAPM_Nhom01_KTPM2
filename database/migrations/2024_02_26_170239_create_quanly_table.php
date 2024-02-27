<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuanlyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QUANLY', function (Blueprint $table) {
            $table->id('MaQL');
            $table->string('TenQL');
            $table->string('CCCD', 20);
            $table->date('NgaySinh');
            $table->string('GioiTinh', 10);
            $table->string('DiaChi');
            $table->string('Email');
            $table->string('SoDienThoai', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('QUANLY');
    }
};
