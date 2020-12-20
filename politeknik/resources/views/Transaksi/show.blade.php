@extends('layouts.header')
@section('title','Data Transaksi')
@section('content')
<div class="content-wrapper">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @foreach ($datatr as $tr)
        <h4 style="text-align: center;" class="card-title">Show Data Transaksi</h4>
        @csrf
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Kode Transaksi :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_sup" id="id_sup" readonly value="{{$tr->kode_trx}}">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Nama Pembeli :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$tr->nama_pembeli}}">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Nama Obat :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="alamat" id="alamat" readonly value="{{$tr->hrgjual->nama}}">
          </div>
          <label for="" class="col-sm-1 col-form-label">Jumlah :</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="kota" id="kota" readonly value="{{$tr->jumlah}}">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Tanggal Jual :</label>
          <div class="col-sm-4">
            <input type="email" class="form-control" name="telp" id="telp" readonly value="{{$tr->tgl_jual}}">
          </div>
          <label for="" class="col-sm-1 col-form-label">Sales :</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="dosen_wali" id="dosen_wali" readonly value="{{$tr->sales->nama}}">
          </div>
        </div>
        @endforeach
        <div class="col-sm-9">
          <a href="/transaksi/index" type="button" class="btn btn-outline-primary">Kembali</a>
        </div>
      </div>
      <hr>
      

    </div>

  </div>
</div>
<!-- End of Main Content -->
@endsection
