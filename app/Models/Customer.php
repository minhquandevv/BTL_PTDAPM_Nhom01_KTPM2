<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'Khachhang';

    protected $primaryKey = 'MaKH';

    protected $fillable = [
        'DuongDanAnh',
        'TenKH',
        'CCCD',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'Email',
        'SoDienThoai',
    ];

    protected $casts = [
        'NgaySinh' => 'date',
    ];
}
