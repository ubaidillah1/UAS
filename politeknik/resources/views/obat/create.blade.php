@extends('layouts.header')
@section('title','Tambah Data Obat')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 style="text-align: center;" class="card-title">Create Data Obat</h4>
                <form action="/obat/store/" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">ID Obat :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id_obat" id="id_pg">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nama Obat :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" id="id_pg">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Tipe :</label>
                    <div class="col-sm-10">
                        <!-- <input type="text" class="form-control" name="id_tipe" id="nama"> -->
                        <select name="id_tipe" class="form-control" id="">
                        @foreach($tpob as $tpob)
                            <option value="{{$tpob->id_tp_obat}}">{{$tpob->tipe}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Kategori :</label>
                    <div class="col-sm-4">
                        <!-- <input type="text" class="form-control" name="id_kategori" id="jk"> -->
                        <select name="id_kategori" class="form-control" id="">
                        @foreach($ktob as $ktob)
                            <option value="{{$ktob->id_kgr_obat}}">{{$ktob->kategori}}</option>
                        @endforeach
                        </select>
                    </div>
                    <label for="" class="col-sm-2 col-form-label">Tanggal Expired :</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="tgl_expired" id="tgl_expired">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Harga Beli :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="hrg_beli" id="alamat">
                    </div>
                    <label for="" class="col-sm-2 col-form-label">Harga Jual :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="hrg_jual" id="telp">
                    </div>
                    <!-- <div class="col-sm-9">
                    </div> -->
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Supplier :</label>
                    <div class="col-sm-4">
                        <!-- <input type="text" class="form-control" name="id_supplier" id="jk"> -->
                        <select type="text" name="id_supplier" class="form-control" id="">
                        @foreach($spob as $spob)
                            <option value="{{$spob->id_sup}}">{{$spob->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                    <label for="" class="col-sm-2 col-form-label">Stok :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="stok" id="tgl_expired">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-sm-12">Simpan</button><br><br>
                <a href="/obat/index" type="button" class="btn btn-outline-warning col-sm-12">Batal</a>
                </form>
            </div>
            <hr>

        </div>

    </div>

</div>
<!-- End of Main Content -->
@endsection