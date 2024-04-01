<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = 'gejalas';

    protected $fillable = ['kode_gejala', 'nama_gejala'];

    public function kerusakan()
    {
        return $this->belongsToMany('App\Kerusakan', 'gejala_kerusakan', 'id_gejala', 'id_kerusakan');
    }
}
