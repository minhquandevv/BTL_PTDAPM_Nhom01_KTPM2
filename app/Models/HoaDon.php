<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;

    protected $table = 'HOADON';

    protected $fillable = [
        'MaKH',
        'MaNV',
        'MaP',
        'NgayDatPhong',
        'NgayTraPhong',
        'TinhTrangHoaDon',
    ];
    protected $primaryKey = 'MaHD';

    // Add timestamps if needed
    public $timestamps = true;

    // Define the relationships with KHACHHANG, NHANVIEN, and PHONG tables
    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class, 'MaKH');
    }

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class, 'MaNV');
    }

    public function phong()
    {
        return $this->belongsTo(Phong::class, 'MaP');
    }
}
