<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;
    protected $table = 'kerusakans';

    protected $fillable = ['kode_kerusakan', 'nama_kerusakan'];

    public function gejala()
    {
        return $this->belongsToMany('App\Gejala', 'gejala_kerusakan', 'id_kerusakan', 'id_gejala');
    }

    public function biayaPerbaikan()
    {
        return $this->hasMany('App\BiayaPerbaikan', 'id_kerusakan', 'id');
    }

    public function solusi()
    {
        return $this->hasMany('App\Solusi', 'id_kerusakan', 'id');
    }
}
