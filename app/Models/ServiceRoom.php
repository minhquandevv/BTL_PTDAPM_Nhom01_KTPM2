<?php

namespace App\Models;

use Database\Seeders\PaymentSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRoom extends Model
{
    use HasFactory;

    protected $table = 'dichvu_phong';

    protected $primaryKey = 'MaDichVuPhong';

    protected $fillable = [
        'MaPhong',
        'MaDichVu',
    ];

    // Quan hệ với bảng 'phong'
    public function room()
    {
        return $this->belongsTo(Room::class, 'MaPhong', 'MaP');
    }

    // Quan hệ với bảng 'dichvu'
    public function service()
    {
        return $this->belongsTo(Service::class, 'MaDichVu', 'MaDV');
    }
}
