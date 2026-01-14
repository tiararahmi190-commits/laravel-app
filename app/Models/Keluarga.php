<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'tb_keluarga';
    protected $primaryKey = 'Keluarga_id';  // ✅ Huruf K BESAR, nilai huruf kecil
    public $timestamps = true;
    
    protected $fillable = [
        'nama_kepala',
        'alamat',
        'no_hp'
    ];
}