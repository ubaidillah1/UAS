@extends('layouts.header')
@section('title','Edit Data Transaksi')
@section('content')
<div class="content-wrapper">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        @foreach ($datatr as $tr)
        <h4 style="text-align: center;" class="card-title">Edit Data Transaksi</h4>
        <form action="/transaksi/update/{{$tr->kode_trx}}" method="POST">
          @csrf
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Kode Transaksi :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kode_trx" id="id_sup" readonly value="{{$tr->kode_trx}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Nama Pembeli :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_pembeli" id="nama" value="{{$tr->nama_pembeli}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Nama Obat :</label>
            <div class="col-sm-4">
              <!-- <input type="text" class="form-control" name="alamat" id="alamat" value="{{$tr->id_obat}}"> -->
              <select name="id_obat" class="form-control" style="color: black;">
                <?php foreach ($dataob as $obat) : ?>
                  <option value="<?= $obat->id_obat ?>"><?= $obat->nama ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <label for="" class="col-sm-1 col-form-label">Jumlah :</label>
            <div class="col-sm-5">
              <input type="number" min="0" class="form-control" name="jumlah" id="kota" value="{{$tr->jumlah}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Tanggal Jual :</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" name="tgl_jual" id="telp" value="{{$tr->tgl_jual}}">
            </div>
            <label for="" class="col-sm-1 col-form-label">Sales :</label>
            <div class="col-sm-5">
              <!-- <input type="text" class="form-control" name="dosen_wali" id="dosen_wali" value="{{$tr->id_pegawai}}"> -->
              <select name="id_pegawai" class="form-control" style="color: black;">
                <?php foreach ($datapg as $pg) : ?>
                  <option value="<?= $pg->id_pg ?>"><?= $pg->nama ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary col-sm-12">Simpan</button><br><br>
          <a href="/transaksi/index" type="button" class="btn btn-outline-warning col-sm-12">Batal</a>
        </form>
        <script>
          var id4 = "{{$tr->hrgjual->id_obat}}"
          var id5 = "{{$tr->sales->id_pg}}"
        </script>
        @endforeach
      </div>
      <hr>
    </div>
  </div>
</div>
<!-- End of Main Content -->
@endsection