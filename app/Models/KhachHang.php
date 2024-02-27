<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;

    protected $table = 'KHACHHANG';

    protected $fillable = [
        'TenKH',
        'CCCD',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'Email',
        'SoDienThoai',
    ];
    protected $primaryKey = 'MaKH';
    // Add timestamps if needed
    public $timestamps = true;
}
