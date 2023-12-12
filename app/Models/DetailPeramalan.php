<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPeramalan extends Model
{
    use HasFactory;

    protected $table = 'detail_peramalans';

    protected $fillable = [
        'peramalan_id',
        'tanggal',
        'nilai_x',
        'nilai_y',
        'nilai_xx',
        'nilai_xy',
        'hasil_prediksi',
        'nilai_pe'
    ];

    public function peramalan()
    {
    	return $this->belongsTo('App\Models\Peramalan');
    }
}
