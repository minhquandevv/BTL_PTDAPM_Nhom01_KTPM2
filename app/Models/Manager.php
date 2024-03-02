<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'QuanLy';

    protected $primaryKey = 'MaQL';

    protected $fillable = [
        'DuongDanAnh',
        'TenQL',
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
