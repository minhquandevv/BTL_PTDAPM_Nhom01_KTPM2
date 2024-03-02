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
        Schema::create('thanhtoan', function (Blueprint $table) {
            $table->id('MaThanhToan');
            $table->unsignedBigInteger('MaDatPhong');
            $table->date('NgayThanhToan');
            $table->decimal('TongTien', 18, 2);
            $table->string('PhuongThucThanhToan',50);
            $table->string('TinhTrangThanhToan',50);
            $table->timestamps();

            $table->foreign('MaDatPhong')->references('MaDatPhong')->on('datphong');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thanhtoan');
    }
};
