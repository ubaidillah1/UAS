@extends('layouts.header')
@section('title','Tambah Data Transaksi')
@section('content')
<div class="content-wrapper">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align: center;" class="card-title">Create Data Transaksi</h4>
        <form action="/transaksi/store" method="POST">
          @csrf
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Kode Transaksi :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kode_trx" id="id_sup" placeholder="Kode Transaksi">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Nama Pembeli:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_pembeli" id="nama" placeholder="Nama Pembeli">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Obat dibeli :</label>
            <div class="col-sm-4">
              <!-- <input type="text" class="form-control" name="id_obat" id="alamat"> -->
              <select name="id_obat" id="" class="form-control" style="color: black;">
                  @foreach($dataob as $ob)
                    <option value="{{$ob->id_obat}}">{{$ob->nama}}</option>
                  @endforeach
              </select>
            </div>
            <label for="" class="col-sm-2 col-form-label">Jumlah :</label>
            <div class="col-sm-4">
              <input type="number" min="0" class="form-control" name="jumlah" id="kota" placeholder="Jumlah">
            </div>
          </div>
          <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Sales :</label>
            <div class="col-sm-4">
              <!-- <input type="text" class="form-control" name="id_pegawai" id="kota"> -->
              <select name="id_pegawai" id="" class="form-control" style="color: black;">
                  @foreach($datapg as $pg)
                    <option value="{{$pg->id_pg}}">{{$pg->nama}}</option>
                  @endforeach
              </select>
            </div>
            <label for="" class="col-sm-2 col-form-label">Tanggal Jual :</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" name="tgl_jual" id="">
            </div>
          </div>
          <button type="submit" class="btn btn-primary col-sm-12">Simpan</button><br><br>
          <a href="/transaksi/index" type="button" class="btn btn-outline-warning col-sm-12">Batal</a>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
@endsection