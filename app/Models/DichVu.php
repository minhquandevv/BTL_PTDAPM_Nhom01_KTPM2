<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    use HasFactory;

    protected $table = 'DICHVU';

    protected $fillable = [
        'TenDichVu',
        'GiaDichVu',
    ];

    // Add timestamps if needed
    public $timestamps = true;
}
