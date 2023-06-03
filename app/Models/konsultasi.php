<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsultasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_penyakit',
        'id_obat',
        
    ];
}
