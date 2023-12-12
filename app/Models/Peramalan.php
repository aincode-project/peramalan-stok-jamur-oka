<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peramalan extends Model
{
    use HasFactory;

    protected $table = 'peramalans';

    protected $fillable = [
        'user_id',
        'tanggal_peramalan',
        'tanggal_awal_data',
        'tanggal_akhir_data',
        'jumlah_data',
        'total_x',
        'total_y',
        'total_xx',
        'total_xy',
        'nilai_a',
        'nilai_b',
        'nilai_mape',
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function detail_peramalan()
    {
    	return $this->hasMany('App\Models\DetailPeramalan');
    }
}
