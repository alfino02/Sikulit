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
    public function gejala(){
        return $this->belongsToMany(gejala::class)->withTimestamps();
    }
    public function gejalas(){
        return $this->belongsToMany(gejala::class, 'gejala_penyakit', 'penyakit_id', 'gejala_id');
    }
}
