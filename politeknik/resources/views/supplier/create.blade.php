@extends('layouts.header')
@section('title','Tambah Data Supplier')
@section('content')
<div class="content-wrapper">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 style="text-align: center;" class="card-title">Create Data Supplier</h4>
        <form action="/supplier/store" method="POST">
          @csrf
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">ID Supplier :</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="id_sup" id="id_sup" placeholder="ID Supplier">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Nama :</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Alamat :</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Kota :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="kota" id="kota" placeholder="Nama Kota">
            </div>
            <label for="" class="col-sm-1 col-form-label">No Telpon :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="telp" id="telp" placeholder="08xx-xxxx-xxxx">
            </div>
          </div>
          <button type="submit" class="btn btn-primary col-sm-12">Simpan</button><br><br>
          <a href="/supplier/index" type="button" class="btn btn-outline-warning col-sm-12">Batal</a>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
@endsection