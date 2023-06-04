<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_penyakit',
        'id_user',
    ];
    public function penyakit(){
        return $this ->belongsTo(penyakit::class,'id_penyakit');
    }
    public function user(){
        return $this ->belongsTo(user::class,'id_user');
    }
}
