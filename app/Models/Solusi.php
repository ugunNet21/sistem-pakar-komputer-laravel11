<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    use HasFactory;
    protected $table = 'solusis';

    protected $fillable = ['kode_solusi', 'nama_solusi'];

    public function kerusakan()
    {
        return $this->belongsTo('App\Kerusakan', 'id_kerusakan', 'id');
    }
}
