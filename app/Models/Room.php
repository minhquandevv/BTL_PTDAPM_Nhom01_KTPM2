<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Room extends Model
{
    use HasFactory;

    protected $table = 'phong';

    protected $primaryKey = 'MaP';

    protected $fillable = [
        'TenPhong',
        'GioiThieuPhong',
        'DonGia',
        'TinhTrang',
        'ViewHuongBien',
        'CoBonTamNgoi',
        'KichThuoc',
        'MaLoaiPhong',
        'SoNguoiToiDa',
        'SoGiuong',
        'SoPhongTam',
        'WifiMienPhi',
        'TVTrongPhong',
        'DienTichBalcon',
    ];

    protected $casts = [
        'ViewHuongBien' => 'boolean',
        'CoBonTamNgoi' => 'boolean',
        'WifiMienPhi' => 'boolean',
        'TVTrongPhong' => 'boolean',
    ];

    // Quan hệ với bảng 'loaiphong'
    public function loaiPhong()
    {
        return $this->belongsTo(RoomType::class, 'MaLoaiPhong', 'MaLoaiPhong');
    }
}
