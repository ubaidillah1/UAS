@extends('layouts.header')
@section('title','Tambah Pegawai')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="text-align: center;" class="card-title">Create Data Pegawai</h4>
                <form action="/pegawai/store" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">ID Pegawai :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id_pg" id="id_sup" placeholder="ID Pegawai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
                        <div class="col-sm-4">
                            <!-- <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat"> -->
                            <select class="form-control" name="jk" id="">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <label for="" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="tgl_lahir" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Tempat Lahir :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="tempat_lahir" id="kota" placeholder="Tempat Lahir">
                        </div>
                        <label for="" class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="alamat" id="telp" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">No Telpon :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="telp" id="kota" placeholder="08xx-xxxx-xxxx">
                        </div>
                        <label for="" class="col-sm-2 col-form-label">Bagian :</label>
                        <div class="col-sm-4">
                            <!-- <input type="text" class="form-control" name="id_bagian" id="telp" placeholder="Alamat"> -->
                            <select class="form-control" name="id_bagian" id="">
                                <option value="BGPG01">Apoteker</option>
                                <option value="BGPG02">Asisten Apoteker</option>
                                <option value="BGPG03">Seksi Pembelian</option>
                                <option value="BGPG04">Seksi Gudang</option>
                                <option value="BGPG05">Seksi Penjualan</option>
                                <option value="BGPG06">Seksi Peracikan</option>
                                <option value="BGPG07">Seksi Tata Usaha</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary col-sm-12">Simpan</button>
                    <a href="/pegawai/index" type="button" class="btn btn-outline-warning col-sm-12">Batal</a>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->
@endsection