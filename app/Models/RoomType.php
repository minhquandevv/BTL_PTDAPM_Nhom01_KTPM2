<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $table = 'loaiphong';

    protected $primaryKey = 'MaLoaiPhong';

    protected $fillable = [
        'TenLoaiPhong',
        'MoTa',
        'SoNguoiToiDa',
        'SoGiuong',
        'SoPhongTam',
        'WifiMienPhi',
        'TVTrongPhong',
        'DienTichBalcon',
    ];

    protected $casts = [
        'WifiMienPhi' => 'boolean',
        'TVTrongPhong' => 'boolean',
    ];

    // Quan hệ với bảng 'phong'
    public function room()
    {
        return $this->hasMany(Room::class, 'MaLoaiPhong', 'MaLoaiPhong');
    }

    public $timestamps = true;
}
