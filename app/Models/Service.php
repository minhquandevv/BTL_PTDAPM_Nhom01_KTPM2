<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'dichvu';

    protected $primaryKey = 'MaDV';

    protected $fillable = [
        'TenDichVu',
        'GiaDichVu',
    ];

    public $timestamps = true;
}
