<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YeuThich extends Model
{
    use HasFactory;

    protected $table = 'YEUTHICH';

    protected $fillable = [
        'MaKH',
        'MaP',
        'NgayThemVao',
    ];

    // Add timestamps if needed
    public $timestamps = true;

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
