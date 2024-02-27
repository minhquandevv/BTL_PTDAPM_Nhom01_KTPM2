<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    use HasFactory;

    protected $table = 'DANHGIA';

    protected $fillable = [
        'MaKH',
        'MaP',
        'LoaiDanhGia',
        'NhanXet',
    ];

    // Add timestamps if needed
    public $timestamps = true;
    protected $primaryKey = 'MaDG';
    // Define the relationships with KHACHHANG and PHONG tables
    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class, 'MaKH');
    }

    public function phong()
    {
        return $this->belongsTo(Phong::class, 'MaP');
    }
}
