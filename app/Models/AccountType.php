<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;

    protected $table = 'LoaiTaiKhoan';

    protected $primaryKey = 'MaLoaiTK';

    protected $fillable = [
        'TenLoaiTK',
    ];

    public $timestamps = true;
}
