<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'datphong';

    protected $primaryKey = 'MaDatPhong';

    protected $fillable = [
        'MaKH',
        'MaPhong',
        'NgayDatPhong',
        'NgayCheckIn',
        'NgayCheckOut',
        'SoNguoi',
        'TinhTrangDatPhong',
        'TinhTrangThanhToan',
    ];

    // Quan hệ với bảng 'khachhang'
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'MaKH', 'MaKH');
    }

    // Quan hệ với bảng 'phong'
    public function room()
    {
        return $this->belongsTo(Room::class, 'MaPhong', 'MaP');
    }
}