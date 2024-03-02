<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'DatPhong';

    protected $primaryKey = 'MaDatPhong';

    protected $fillable = [
        'MaKH',
        'MaPhong',
        'NgayDatPhong',
        'NgayCheckIn',
        'NgayCheckOut',
        'SoNguoi',
        'TinhTrangDatPhong',
        'TinhTrangThanhToan',
    ];

    public $timestamps = true;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'MaKH', 'MaKH');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'MaPhong', 'MaP');
    }
}
