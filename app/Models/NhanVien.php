<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;

    protected $table = 'NHANVIEN';

    protected $fillable = [
        'TenNV',
        'CCCD',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'Email',
        'SoDienThoai',
        'Chucvu',
        'MaQL',
    ];

    // Add timestamps if needed
    public $timestamps = true;

    // Define the relationship with QUANLY table
    public function quanly()
    {
        return $this->belongsTo(QuanLy::class, 'MaQL');
    }
}
