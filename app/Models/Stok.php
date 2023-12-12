<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    protected $table = 'stoks';

    protected $fillable = [
        'user_id',
        'nama_barang',
        'tanggal_catat',
        'tanggal_stok',
        'jumlah_stok',
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
