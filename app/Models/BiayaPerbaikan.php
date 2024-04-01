<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaPerbaikan extends Model
{
    use HasFactory;
    protected $table = 'biaya_perbaikans';

    protected $fillable = ['kode_biaya', 'nama_kerusakan', 'biaya'];

    public function kerusakan()
    {
        return $this->belongsTo('App\Kerusakan', 'id_kerusakan', 'id');
    }
}
