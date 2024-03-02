<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'NhanVien';

    protected $primaryKey = 'MaNV';

    protected $fillable = [
        'DuongDanAnh',
        'TenNV',
        'CCCD',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'Email',
        'SoDienThoai',
        'Chucvu',
        'MaQL',
    ];

    protected $casts = [
        'NgaySinh' => 'date',
    ];

    public function manager()
    {
        return $this->belongsTo(Manager::class, 'MaQL', 'MaQL');
    }
}
