<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeObatModel extends Model
{
    use HasFactory;

    protected $table = 'tipe_obat';
    protected $primarykey='id_tp_obat';

    public function Obat()
    {
        //memberitahu bahwa mahasiswa punya banyak nilai
        return $this->belongsTo('App\Models\ObatModel');
    }

}
