<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Room extends Model
{
    use HasFactory;

    protected $table = 'Phong';

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

    public $timestamps = true;

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'MaLoaiPhong', 'MaLoaiPhong');
    }
}
