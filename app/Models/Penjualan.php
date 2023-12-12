<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualans';

    protected $fillable = [
        'user_id',
        'nama_barang',
        'tanggal_catat',
        'tanggal_penjualan',
        'jumlah_stok_terjual',
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
