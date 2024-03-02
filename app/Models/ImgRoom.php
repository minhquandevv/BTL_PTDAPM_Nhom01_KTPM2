<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgRoom extends Model
{
    use HasFactory;

    protected $table = 'img_rooms';

    protected $primaryKey = 'MaAnh';

    protected $fillable = [
        'MaPhong',
        'DuongDanAnh',
    ];

    public $timestamps = true;

    public function room()
    {
        return $this->belongsTo(Room::class, 'MaPhong', 'MaP');
    }
}
