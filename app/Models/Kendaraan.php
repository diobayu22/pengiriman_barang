<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';
    protected $fillable = ['no_polisi', 'merk', 'no_mesin', 'tahun', 'warna', 'supir'];

    public function supir()
    {
        return $this->belongsTo('App\Models\supir');
    }
}
