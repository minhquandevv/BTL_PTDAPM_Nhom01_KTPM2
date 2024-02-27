<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    use HasFactory;

    protected $table = 'PHONG';

    protected $fillable = [
        'TenPhong',
        'GioiThieuPhong',
        'DonGia',
        'TinhTrang',
    ];

    // Add timestamps if needed
    public $timestamps = true;
    protected $primaryKey = 'MaP';
}
