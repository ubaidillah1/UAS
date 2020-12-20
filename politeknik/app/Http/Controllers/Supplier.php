<?php

namespace App\Http\Controllers;

use App\Models\SupplierModel;
use Illuminate\Http\Request;
use PDF;
use App\Exports\ExportSupplier;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
class Supplier extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SupplierModel::paginate(5);
        return view('supplier.index', ['ndata' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Tampil View form Tambah data supplier
        return view('supplier.create');
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
        $data = new SupplierModel;
        //Memvalidasi Data
        $this->validate($request,[
        'id_sup' => 'required|unique:supplier',
        'telp' => 'required|unique:supplier'
        ]);
        //sebelah kiri nama di DB dan sebelah kanan nama di form (view)
        $data->id_sup = $request->id_sup;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->kota = $request->kota;
        $data->telp = $request->telp;
        $data ->save();

        //Redirect setelah berhasil simpan data
        return redirect('/supplier/index')->with('success','Data Berhasil di Tambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //memanggil model, query
        $data = SupplierModel::where('id_sup', $id)->get();

        //memanggil model nilai, query dengan kondisi where
        // $data = SupplierModel::where('nim', $id)->first();

        //memanggil relasi table, dgn cara memanggil method
        // $datanli = $data->ambilnilai()->paginate(3);
        // return view('supplier.show', ['datamhs' => $datamhs,
        //                                 'datanli' => $datanli]);
        return view('supplier.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Method model, query dengan kondisi where
        $data=SupplierModel::where('id_sup', $id)->get();
        return view ('supplier.edit', ['data'=> $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Memanggil model, query dengan kondisi where first

        $data=SupplierModel::where('id_sup', $id)->first();
        $data->id_sup = $request->id_sup;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->kota = $request->kota;
        $data->telp = $request->telp;
        $data ->save();

        //Redirect setelah berhasil simpan data
        return redirect('/supplier/index')->with('success','Data Berhasil di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=SupplierModel::where('id_sup', $id)->first();
        $data->delete();

        //Redirect setelah berhasil simpan data
        return redirect('/supplier/index')->with('success','Data Berhasil di Hapus !');
    }
    public function search(Request $request){
        //Menangkap data dari pencarian
        $cari = $request->cari;
        //Query Data dari table supplier
        $data = SupplierModel::where('nama', 'LIKE', "%".$cari."%")->paginate();
        //Session untuk tampilan old pada input pencarian
        session()->flashInput($request->input());
        //Mengirim data ke View
        return view('supplier.index',['ndata' => $data]);
    }
    public function printpdf()
    {
        //Ambil data Supplier
        $data = SupplierModel::all();
        //Di tampilkan ke dalam file cetak PDF dalam bentuk landscape
        $pdf = PDF::loadview('supplier.cetakpdf',['ndata' => $data])->setPaper('A4','landscape');
        //File Download
        return $pdf->download('supplier.pdf');
    }
    public function printexcel()
    {
        return Excel::download(new ExportSupplier, 'supplier.xlsx');
    }

}
