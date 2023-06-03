<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $table = "obats";
    protected $primarykey = "id";
    protected $fillable = [
        'nama_obat',
        'deskripsi_obat',
    ];
}
