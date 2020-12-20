@extends('layouts.header')
@section('title','Data Pegawai')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @foreach ($datapg as $pg)
                <h4 style="text-align: center;" class="card-title">Show Data Pegawai</h4>
                @csrf
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">ID Pegawai :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="id_pg" id="id_pg" readonly value="{{$pg->id_pg}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nama :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$pg->nama}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="jk" id="jk" readonly value="{{$pg->jk}}">
                    </div>
                    <label for="" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" readonly value="{{$pg->tgl_lahir}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Alamat :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="alamat" id="alamat" readonly value="{{$pg->alamat}}">
                    </div>
                    <label for="" class="col-sm-2 col-form-label">No Telpon :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="telp" id="telp" readonly value="{{$pg->telp}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Bagian :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telp" id="telp" readonly value="{{$pg->bagianpegawai->nama_bagian}}">
                    </div>
                </div>
                <div class="col-sm-9">
                    <a href="/pegawai/index" type="button" class="btn btn-outline-primary">Kembali</a>
                </div>
                @endforeach
            </div>
            <hr>
            <h4 style="text-align: center;" class="card-title">Obat Terjual</h4>
            <table id="recent-purchases-listing" class="table">
                <thead class="thead-dark">
                    <tr align="center">
                        <th scope="col">#</th>
                        <th scope="col">ID Obat</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Tanggal Terjual</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @forelse ($datatr->pgmenjual as $pgb)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pgb->id_obat}}</td>
                        <td>{{$pgb->nama_pembeli}}</td>
                        <td>{{$pgb->tgl_jual}}</td>
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