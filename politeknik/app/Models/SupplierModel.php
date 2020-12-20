<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    use HasFactory;
    //nama tabel
    protected $table = 'supplier';
    //default primary ky
    protected $primarykey = 'id_sup';

    
    public function wali()
    {
        return $this->hasOne('App\Models\DosenModel', 'nidn', 'dosen_wali');
    }

    public function ambilnilai()
    {
        return $this->hasMany('App\Models\NilaiModel', 'nim_dinilai', 'nim');
    }
}
