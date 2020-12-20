<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatModel extends Model
{
    use HasFactory;
    protected $table = 'obat';
    protected $primarykey = 'id_obat';

    public function tipeob()
    {
        return $this->hasOne('App\Models\TipeObatModel', 'id_tp_obat', 'id_tipe');
    }
    public function ktgob()
    {
        return $this->hasOne('App\Models\KategoriObatModel', 'id_kgr_obat', 'id_kategori');
    }
    public function supplierob()
    {
        return $this->hasOne('App\Models\SupplierModel', 'id_sup', 'id_supplier');
    }
    public function ambilktgr()
    {
        return $this->hasMany('App\Models\KategoriObatModel', 'id_kgr_obat', 'id_kategori');
    }
}
