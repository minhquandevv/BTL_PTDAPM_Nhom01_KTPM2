<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'ThanhToan';

    protected $primaryKey = 'MaThanhToan';

    protected $fillable = [
        'MaDatPhong',
        'NgayThanhToan',
        'TongTien',
        'PhuongThucThanhToan',
        'TinhTrangThanhToan',
    ];

    public $timestamps = true;

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'MaDatPhong', 'MaDatPhong');
    }
}
