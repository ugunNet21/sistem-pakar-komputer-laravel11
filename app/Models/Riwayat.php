<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;
    protected $table = 'riwayats';

    protected $fillable = ['id_hasil', 'tindakan'];

    public function hasil()
    {
        return $this->belongsTo('App\Hasil', 'id_hasil', 'id');
    }
}
