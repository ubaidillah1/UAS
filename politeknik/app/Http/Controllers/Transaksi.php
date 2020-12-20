<?php

namespace App\Http\Controllers;

use App\Models\TransaksiModel;
use App\Models\ObatModel;
use App\Models\PegawaiModel;
use Illuminate\Http\Request;
use PDF;
use App\Exports\ExportTransaksi;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
class Transaksi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TransaksiModel::paginate(5);
        return view('transaksi.index', ['ndata' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Tampil View form Tambah data transaksi
        $dataob = ObatModel::all();
        $datapg = PegawaiModel::all();
        return view('transaksi.create', ['dataob' => $dataob, 'datapg' => $datapg]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Memanggil model, query simpan data
        $data = new TransaksiModel;
        //Memvalidasi Data
        $this->validate($request, [
            'kode_trx' => 'required|unique:transaksi'
        ]);
        //sebelah kiri nama di DB dan sebelah kanan nama di form (view)
        $data->kode_trx = $request->kode_trx;
        $data->nama_pembeli = $request->nama_pembeli;
        $data->id_obat = $request->id_obat;
        $data->jumlah = $request->jumlah;
        $data->tgl_jual = $request->tgl_jual;
        $data->id_pegawai = $request->id_pegawai;
        $data->save();

        //Redirect setelah berhasil simpan data
        return redirect('/transaksi/index')->with('success', 'Data Berhasil di Tambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($trx)
    {
        //memanggil model, query
        $datatr = TransaksiModel::where('kode_trx', $trx)->get();
        $datatrdt = TransaksiModel::where('kode_trx', $trx)->get();
        // return $datatr;
        // print_r($datatr);
        return view('transaksi.show', ['datatr' => $datatr, 'datatrdt'=> $datatrdt]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Method model, query dengan kondisi where
        $datatr = TransaksiModel::where('kode_trx', $id)->get();
        $dataob = ObatModel::all();
        $datapg = PegawaiModel::all();
        return view('transaksi.edit', ['datatr' => $datatr, 'dataob' => $dataob, 'datapg' => $datapg]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $trx)
    {
        //Memanggil model, query dengan kondisi where first

        $data = TransaksiModel::where('kode_trx', $trx)->first();
        // return $data;
        $data->kode_trx = $request->kode_trx;
        $data->nama_pembeli = $request->nama_pembeli;
        $data->id_obat = $request->id_obat;
        $data->jumlah = $request->jumlah;
        $data->tgl_jual = $request->tgl_jual;
        $data->id_pegawai = $request->id_pegawai;
        $data->save();

        //Redirect setelah berhasil simpan data
        return redirect('/transaksi/index')->with('success', 'Data Berhasil di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TransaksiModel::where('kode_trx', $id)->first();
        $data->delete();

        //Redirect setelah berhasil simpan data
        return redirect('/transaksi/index')->with('success', 'Data Berhasil di Hapus !');
    }
    public function search(Request $request)
    {
        //Menangkap data dari pencarian
        $cari = $request->cari;
        //Query Data dari table transaksi
        $data = TransaksiModel::where('nama_pembeli', 'LIKE', "%" . $cari . "%")->paginate();
        //Session untuk tampilan old pada input pencarian
        session()->flashInput($request->input());
        //Mengirim data ke View
        return view('transaksi.index', ['ndata' => $data]);
    }
    public function printpdf()
    {
        //Ambil data Supplier
        $data = TransaksiModel::all();
        //Di tampilkan ke dalam file cetak PDF dalam bentuk landscape
        $pdf = PDF::loadview('transaksi.cetakpdf',['ndata' => $data])->setPaper('A4','landscape');
        //File Download
        return $pdf->download('transaksi.pdf');
    }
    public function printexcel()
    {
        return Excel::download(new ExportTransaksi, 'transaksi.xlsx');
    }
}
