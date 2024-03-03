<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'khachhang';

    protected $primaryKey = 'MaKH';

    protected $fillable = [
        'DuongDanAnh',
        'TenKH',
        'CCCD',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'Email',
        'Password',
        'SoDienThoai',
    ];

    protected $hidden = [
        'Password',
    ];

    protected $casts = [
        'NgaySinh' => 'date',
    ];
}
