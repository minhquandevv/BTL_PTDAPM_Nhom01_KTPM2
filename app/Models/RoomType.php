<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $table = 'LoaiPhong';

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

    public $timestamps = true;
}
