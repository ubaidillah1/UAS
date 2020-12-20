<?php

namespace App\Http\Controllers;

use App\Models\PegawaiModel;
use App\Models\BagianPegawaiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pegawai extends Controller
{
    //tampilkan data
    public function index()
    {
        //return "Masuk Mahasiswa Controller dengan Method Index";
        //memanggil model
        $data = PegawaiModel::paginate(5);
        //mengirim variabel data dalam bentuk array kedalam view
        return view('pegawai.index', ['data' => $data]);
    }
    //detail mahasiswa
    public function show($id)
    {
        //Query ambil data pegawai
        $datapg = PegawaiModel::where('id_pg', $id)->get();
        //Query ambil relasi data pegawai dgn mahasiswa
        $datatr = PegawaiModel::where('id_pg', $id)->first();
        // $datamhs = PegawaiModel::where('nidn', $id)->first();
        return view('pegawai.show', ['datapg' => $datapg, 'datatr' => $datatr]);
    }
    public function create()
    {
        //tampil view form tambah data mahasiswa
        return view('pegawai.create');
    }
    public function edit($id)
    {
        //memanggil model, query dengan kondisi where
        // $pegawai=DB::select('SELECT * FROM pegawai');
        $datapg = PegawaiModel::where('id_pg', $id)->get();
        $databgpg= BagianPegawaiModel::all(); 
        return view('pegawai.edit', ['datapg' => $datapg , 'databgpg'=>$databgpg]);
    }
    public function store(Request $request)
    {
        //memanggil model, query simpan data
        $data = new PegawaiModel;
        // $validatedData = $request->validate([
        //     'nidn' => 'required|unique:pegawai|max:20',
        // ]);
        $this->validate($request, [
            'id_pg' => 'required|unique:pegawai',
            'telp' => 'required|unique:pegawai',
        ]);
        // if ($validatedData) {
        //sebelah kiri nama di DB dan sebelah kanan nama di form (view)
        $data->id_pg = $request->id_pg;
        $data->nama = $request->nama;
        $data->jk = $request->jk;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->id_bagian = $request->id_bagian;
        $data->save();
        // }
        //redirect setelah berhasil simpan data
        return redirect('/pegawai/index')->with(['success' => 'Data Berhasil Di Tambahkan !']);
    }
    public function update(Request $request, $id)
    {
        //memanggil model, query dengan kondisi where first
        $data = PegawaiModel::where('id_pg', $id)->first();

        
        $data->id_pg = $request->id_pg;
        $data->nama = $request->nama;
        $data->jk = $request->jk;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->id_bagian = $request->id_bagian;
        $data->save();

        //redirect setelah berhasil simpan data
        return redirect('/pegawai/index')->with('success', 'Data Berhasil di Update !');
    }
    public function destroy($id)
    {
        //memanggil model, query dengan kondisi where first
        $data = PegawaiModel::where('id_pg', $id)->first();
        $data->delete();

        //redirect setelah berhasil simpan data
        return redirect('/pegawai/index')->with(['success' => 'Data Berhasil di Hapus !']);
    }
    public function search(Request $request)
    {
        //Menangkap data dari pencarian
        $cari = $request->cari;
        //Query Data dari table pegawai
        $data = PegawaiModel::where('nama', 'LIKE', "%" . $cari . "%")->paginate();
        //Session untuk tampilan old pada input pencarian
        session()->flashInput($request->input());
        //Mengirim data ke View
        return view('pegawai.index', ['data' => $data]);
    }
}