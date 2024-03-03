<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    protected $table = 'nhanvien';

    protected $primaryKey = 'MaNV';

    protected $fillable = [
        'DuongDanAnh',
        'TenQL',
        'CCCD',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'Email',
        'Password',
        'Chucvu',
        'SoDienThoai',
    ];

    protected $hidden = [
        'Password',
        // Các trường khác bạn muốn ẩn khi chuyển đối tượng sang JSON
    ];

    protected $casts = [
        'NgaySinh' => 'date', // Chuyển đổi trường NgaySinh thành kiểu ngày
    ];
}
