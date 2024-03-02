<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'LienHe';

    protected $primaryKey = 'MaLienHe';

    protected $fillable = [
        'Email',
        'SoDT',
        'MaQL',
        'MaNV',
    ];

    public function manager()
    {
        return $this->belongsTo(Manager::class, 'MaQL');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'MaNV');
    }
}
