<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penimbangan extends Model
{
    use HasFactory;

    protected $table = 'tb_penimbangan';

    protected $fillable = [
        'balita_id',
        'tanggal',
        'berat',
        'tinggi',
        'status_gizi',
        'keterangan',
    ];

    public function balita()
    {
        return $this->belongsTo(Balita::class, 'balita_id');
    }
}
