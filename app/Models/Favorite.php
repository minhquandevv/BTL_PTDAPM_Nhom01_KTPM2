<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $table = 'yeuthich';

    protected $primaryKey = 'MaYT';

    protected $fillable = [
        'MaKH',
        'MaP',
        'NgayThemVao',
    ];

    // Quan hệ với bảng 'phong'
    public function room()
    {
        return $this->belongsTo(Room::class, 'MaP', 'MaP');
    }

    // Quan hệ với bảng 'khachhang'
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'MaKH', 'MaKH');
    }
}