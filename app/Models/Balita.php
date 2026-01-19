<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    protected $table = 'tb_balita';
    protected $primaryKey = 'balita_id';
    public $timestamps = true;
    
    protected $fillable = [
        'keluarga_id',
        'nama_balita',
        'tgl_lahir',
        'jenis_kelamin'
    ];

    // Relasi ke tabel keluarga
    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'keluarga_id', 'keluarga_id');
    }
}