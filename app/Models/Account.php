<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'TaiKhoan';

    protected $primaryKey = 'MaTK';

    protected $fillable = [
        'TenDangNhap',
        'MatKhau',
        'MaLoaiTK',
    ];

    public $timestamps = true;

    public function accountType()
    {
        return $this->belongsTo(AccountType::class, 'MaLoaiTK', 'MaLoaiTK');
    }
}
