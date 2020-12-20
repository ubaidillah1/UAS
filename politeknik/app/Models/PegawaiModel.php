<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\SoftDeletes;

class PegawaiModel extends Model
{
    use HasFactory;
    //nama tabel
    protected $table = 'pegawai';

    protected $primarykey = 'id_pg';

    public function bagianpegawai()
    {
        return $this->hasOne('App\Models\BagianPegawaiModel', 'id_bagian_pg', 'id_bagian');
    }
    public function bagianpegawai2()
    {
        return $this->hasOne('App\Models\BagianPegawaiModel');
    }

    public function walimahasiswa()
    {
        //memberitahu bahwa mahasiswa punya banyak nilai
        return $this->hasMany('App\Models\MahasiswaModel', 'dosen_wali', 'nidn');
    }

    public function pgmenjual()
    {
        //memberitahu bahwa dosen punya banyak nilai
        return $this->hasMany('App\Models\TransaksiModel', 'id_pegawai', 'id_pg');
    }
    public function obatjual()
    {
        //memberitahu bahwa dosen punya banyak nilai
        return $this->hasMany('App\Models\ObatModel', 'nama');
    }

    // use SoftDeletes;
}