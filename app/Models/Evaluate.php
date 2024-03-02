<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluate extends Model
{
    use HasFactory;

    protected $table = 'DanhGia';

    protected $primaryKey = 'MaDanhGia';

    protected $fillable = [
        'MaDatPhong',
        'DiemDanhGia',
        'NhanXet',
    ];

    public $timestamps = true;

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'MaDatPhong', 'MaDatPhong');
    }
}
