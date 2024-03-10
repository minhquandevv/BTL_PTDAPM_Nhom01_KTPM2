<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgRoom extends Model
{
    use HasFactory;

    protected $table = 'anhphong';

    protected $primaryKey = 'MaAnh';

    protected $fillable = [
        'MaPhong',
        'DuongDanAnh',
    ];

    // Quan hệ với bảng 'phong'
    public function room()
    {
        return $this->belongsTo(Room::class, 'MaPhong', 'MaP');
    }

    public function imgRoom()
    {
        return $this->belongsTo(ImgRoom::class, 'MaPhong', 'MaPhong');
    }
}
