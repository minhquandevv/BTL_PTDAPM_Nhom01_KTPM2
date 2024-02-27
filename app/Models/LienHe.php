<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LienHe extends Model
{
    use HasFactory;

    protected $table = 'LIENHE';

    protected $fillable = [
        'Email',
        'SoDT',
        'MaQL',
        'MaNV',
    ];

    // Add timestamps if needed
    public $timestamps = true;

    // Define the relationships with QUANLY and NHANVIEN tables
    public function quanly()
    {
        return $this->belongsTo(QuanLy::class, 'MaQL');
    }

    public function nhanvien()
    {
        return $this->belongsTo(NhanVien::class, 'MaNV');
    }
}
