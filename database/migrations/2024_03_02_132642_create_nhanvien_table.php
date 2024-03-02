<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanvienTable extends Migration
{
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->id('MaNV');
            $table->string('DuongDanAnh')->nullable();
            $table->string('TenQL',50);
            $table->string('CCCD',20)->unique();
            $table->date('NgaySinh');
            $table->string('GioiTinh',10);
            $table->string('DiaChi',255);
            $table->string('Email',50)->unique();
            $table->string('Password',255);
            $table->string('Chucvu',50);
            $table->string('SoDienThoai',20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
