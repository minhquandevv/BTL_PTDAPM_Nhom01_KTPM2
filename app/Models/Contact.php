<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'lienhe';

    protected $primaryKey = 'MaLienHe';

    protected $fillable = [
        'Email',
        'SoDT',
        'MaNV',
    ];

    // Quan hệ với bảng 'nhanvien'
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'MaNV', 'MaNV');
    }
}
