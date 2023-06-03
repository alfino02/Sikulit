<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $table = "penyakits";
    protected $primarykey = "id";
    protected $fillable = [
        'nama_penyakit',
        'foto_penyakit',
        'deskripsi_penyakit',
        'id_obat',
    ];
}
