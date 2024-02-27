<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    use HasFactory;

    protected $table = 'KHUYENMAI';

    protected $fillable = [
        'Mota',
        'NgayBatDau',
        'NgayKetThuc',
        'MaP',
        'MaQL',
    ];

    // Add timestamps if needed
    public $timestamps = true;

    // Define the relationships with PHONG and QUANLY tables
    public function phong()
    {
        return $this->belongsTo(Phong::class, 'MaP');
    }

    public function quanly()
    {
        return $this->belongsTo(QuanLy::class, 'MaQL');
    }
}
