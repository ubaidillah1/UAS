<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BagianPegawaiModel extends Model
{
    use HasFactory;

    protected $table = 'bagian_pg';
    protected $primarykey='id_bagian_pg';

}
