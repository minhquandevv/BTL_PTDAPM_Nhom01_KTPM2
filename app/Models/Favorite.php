<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $table = 'YeuThich';

    protected $primaryKey = 'MaYT';

    protected $fillable = [
        'MaKH',
        'MaP',
        'NgayThemVao',
    ];

    public $timestamps = true;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'MaKH', 'MaKH');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'MaP', 'MaP');
    }
}
