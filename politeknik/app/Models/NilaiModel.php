<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiModel extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    public function mahasiswa(){
        //merelasikan tabel mahasiswa dengan tabel nilai
        return $this->hasOne('App\Models\MahasiswaModel', 'nim', 'nim_dinilai');
    }

    public function dosen()
    {
        //merelasikan tabel dosen dengan tabel nilai
        return $this->hasOne('App\Models\DosenModel', 'nidn', 'nidn_penilai');
    }

    public function matkul()
    {
        //merelasikan tabel matkul dengan tabel nilai
        return $this->hasOne('App\Models\MatkulModel', 'kode', 'matkul_dinilai');
    }

}
