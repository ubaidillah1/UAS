@extends('layouts.header')
@section('title','Data Obat')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @foreach ($dataob as $ob)
                <h4 style="text-align: center;" class="card-title">Show Data Obat</h4>
                @csrf
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nama Obat :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" id="id_pg" readonly value="{{$ob->nama}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Tipe :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id_tipe" id="nama" readonly value="{{$ob->tipeob->tipe}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Kategori :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="jk" id="jk" readonly value="{{$ob->ktgob->kategori}}">
                    </div>
                    <label for="" class="col-sm-2 col-form-label">Tanggal Expired :</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="tgl_expired" id="tgl_expired" readonly value="{{$ob->tgl_expired}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Harga Beli :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="hrg_beli" id="alamat" readonly value="{{$ob->hrg_beli}}">
                    </div>
                    <label for="" class="col-sm-2 col-form-label">Harga Jual :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="hrg_jual" id="telp" readonly value="{{$ob->hrg_jual}}">
                    </div>
                    <!-- <div class="col-sm-9">
                    </div> -->
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Supplier :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="" id="jk" readonly value="{{$ob->supplierob->nama}}">
                    </div>
                    <label for="" class="col-sm-2 col-form-label">Stok :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="stok" id="tgl_expired" readonly value="{{$ob->stok}}">
                    </div>
                </div>
                <a href="/obat/index" type="button" class="btn btn-outline-primary">Kembali</a>
                @endforeach
            </div>
            <hr>
            <h4 style="text-align: center;" class="card-title">Kategori</h4>
            <table id="recent-purchases-listing" class="table">
                <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">ID Kategori</th>
                        <th scope="col">Kategori</th>
                        <!-- <th scope="col">Tanggal Terjual</th> -->
                       
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataktgr->ambilktgr as $ktgr)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$ktgr->id_kgr_obat}}</td>
                        <td>{{$ktgr->kategori}}</td>
                        <!-- <td>{{$ktgr->tgl_jual}}</td> -->
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" style="text-align: center">Tidak Ada Data </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>

    </div>

</div>
<!-- End of Main Content -->
@endsection