<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    // protected $primaryKey = 'kode_trx';

    
    public function sales()
    {
        return $this->hasOne('App\Models\PegawaiModel', 'id_pg', 'id_pegawai');
    }
    public function hrgjual()
    {
        return $this->hasOne('App\Models\ObatModel', 'id_obat', 'id_obat');
    }
    public function ambildetail()
    {
        return $this->hasOne('App\Models\DetailTransaksiModel', 'id_obat', 'id_obat','id_pegawai','id_pegawai');
    }

}
