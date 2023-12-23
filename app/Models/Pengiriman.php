<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = 'pengiriman';
    protected $fillable = ['id', 'no_pengiriman', 'created_at', 'penerima', 'barang', 'biaya_kirim', 'status'];


    public function supir()
    {
        return $this->belongsTo('App\Models\Supir');
        // return $this->belongsTo(Supir::class);
    }

    public function pelanggan()
    {
        return $this->belongsTo('App\Models\pelanggan');
        // return $this->belongsTo(Supir::class);
    }

    public function pengirim()
    {
        return $this->belongsTo('App\Models\pengirim');
        // return $this->belongsTo(Supir::class);
    }
}
