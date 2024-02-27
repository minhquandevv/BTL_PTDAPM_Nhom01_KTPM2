<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTaiKhoan extends Model
{
    use HasFactory;

    protected $table = 'LOAITAIKHOAN';

    protected $fillable = [
        'TenLoaiTK',
    ];

    // Add timestamps if needed
    public $timestamps = true;

    // Define any relationships if applicable
}
