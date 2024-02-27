<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoan extends Model
{
    use HasFactory;

    protected $table = 'TAIKHOAN';

    protected $fillable = [
        'MaLoaiTK',
        'TenDangNhap',
        'MatKhau',
    ];

    // Add timestamps if needed
    public $timestamps = true;

    // Define the relationship with LOAITAIKHOAN table
    public function loaitaikhoan()
    {
        return $this->belongsTo(LoaiTaiKhoan::class, 'MaLoaiTK');
    }
}
