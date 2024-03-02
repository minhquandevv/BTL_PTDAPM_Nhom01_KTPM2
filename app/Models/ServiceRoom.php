<?php

namespace App\Models;

use Database\Seeders\PaymentSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRoom extends Model
{
    use HasFactory;

    protected $table = 'DichVuPhong';

    protected $primaryKey = 'MaDichVuPhong';

    protected $fillable = [
        'MaPhong',
        'MaDichVu',
    ];

    public $timestamps = true;

    public function room()
    {
        return $this->belongsTo(Room::class, 'MaPhong', 'MaP');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'MaDichVu', 'MaDV');
    }
}
