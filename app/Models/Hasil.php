<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $table = 'hasils';

    protected $fillable = ['id_gejala', 'id_kerusakan'];

    public function gejala()
    {
        return $this->belongsTo('App\Gejala', 'id_gejala', 'id');
    }

    public function kerusakan()
    {
        return $this->belongsTo('App\Kerusakan', 'id_kerusakan', 'id');
    }

    public function riwayat()
    {
        return $this->hasOne('App\Riwayat', 'id_hasil', 'id');
    }
}
