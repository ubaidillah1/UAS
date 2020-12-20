<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriObatModel extends Model
{
    use HasFactory;

    //nama tabel yang ada di database
    protected $table = 'kategori_obat';
    protected $primarykey='id_kgr_obat';

}
