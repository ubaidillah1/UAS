<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ObatModel;
use App\Models\TipeObatModel;
use App\Models\SupplierModel;
use App\Models\KategoriObatModel;

class Obat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ObatModel::paginate(5);
        // return $data;
        // return view('obat.index',compact('data'));
        return view('obat.index', ['dataob' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tpob = TipeObatModel::all();
        $spob = SupplierModel::all();
        $ktob = KategoriObatModel::all();
        return view('obat.create', ['tpob' => $tpob, 'spob' => $spob, 'ktob' => $ktob]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ObatModel;
        $this->validate($request, [
            'id_obat' => 'required|unique:obat'
        ]);
        $data->id_obat = $request->id_obat;
        $data->nama = $request->nama;
        $data->id_tipe = $request->id_tipe;
        $data->id_kategori = $request->id_kategori;
        $data->tgl_expired = $request->tgl_expired;
        $data->hrg_beli = $request->hrg_beli;
        $data->hrg_jual = $request->hrg_jual;
        $data->id_supplier = $request->id_supplier;
        $data->stok = $request->stok;
        $data->save();
        return redirect('/obat/index')->with(['success' => 'Data Berhasil Di Tambahkan !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataob = ObatModel::where('id_obat', $id)->get();
        $dataktgr = ObatModel::where('id_obat', $id)->first();
        return view('obat.show', ['dataob' => $dataob, 'dataktgr' => $dataktgr]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataob = ObatModel::where('id_obat', $id)->get();
        $tpob = TipeObatModel::all();
        $spob = SupplierModel::all();
        $ktob = KategoriObatModel::all();
        return view('obat.edit', [
            'dataob' => $dataob,
            'tpob' => $tpob,
            'spob' => $spob,
            'ktob' => $ktob
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ObatModel::where('id_obat', $id)->first();
        // $data->id_obat = $request->id_obat;
        $data->nama = $request->nama;
        $data->id_tipe = $request->id_tipe;
        $data->id_kategori = $request->id_kategori;
        $data->tgl_expired = $request->tgl_expired;
        $data->hrg_beli = $request->hrg_beli;
        $data->hrg_jual = $request->hrg_jual;
        $data->id_supplier = $request->id_supplier;
        $data->stok = $request->stok;
        $data->save();
        return redirect('/obat/index')->with('success', 'Data Berhasil di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ObatModel::where('id_obat', $id)->first();
        $data->delete();
        return redirect('/obat/index')->with(['success' => 'Data Berhasil di Hapus !']);
    }
    public function search(Request $request)
    {
        //Menangkap data dari pencarian
        $cari = $request->cari;
        //Query Data dari table pegawai
        $data = ObatModel::where('nama', 'LIKE', "%" . $cari . "%")->paginate();
        //Session untuk tampilan old pada input pencarian
        session()->flashInput($request->input());
        //Mengirim data ke View
        return view('obat.index', ['dataob' => $data]);
    }
}
