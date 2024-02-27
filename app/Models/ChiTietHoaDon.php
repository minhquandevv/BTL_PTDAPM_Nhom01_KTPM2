<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    use HasFactory;

    protected $table = 'CHITIETHOADON';

    protected $fillable = [
        'MaHD',
        'MaDV',
        'SoLuong',
    ];

    // Add timestamps if needed
    public $timestamps = true;

    // Define the relationships with HOADON and DICHVU tables
    public function hoadon()
    {
        return $this->belongsTo(HoaDon::class, 'MaHD');
    }

    public function dichvu()
    {
        return $this->belongsTo(DichVu::class, 'MaDV');
    }
}
