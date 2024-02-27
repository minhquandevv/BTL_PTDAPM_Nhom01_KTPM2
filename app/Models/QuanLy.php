<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanLy extends Model
{
    use HasFactory;

    protected $table = 'QUANLY';

    protected $fillable = [
        'TenQL',
        'CCCD',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'Email',
        'SoDienThoai',
    ];

    // Add timestamps if needed
    public $timestamps = true;
    public function nhanviens()
    {
        return $this->hasMany(NhanVien::class, 'MaQL');
    }

}
