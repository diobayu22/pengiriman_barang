<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;
    protected $table = 'supir';
    protected $fillable = ['id', 'no_ktp', 'nama', 'alamat', 'telp'];
}
