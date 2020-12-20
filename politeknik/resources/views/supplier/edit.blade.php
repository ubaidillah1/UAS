@extends('layouts.header')
@section('title','Data Supplier')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @foreach ($data as $sup)
                <h4 style="text-align: center;" class="card-title">Show Data Supplier</h4>

                <form action="/supplier/update/{{$sup->id_sup}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">ID Supplier :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id_sup" id="id_sup" readonly value="{{$sup->id_sup}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" value="{{$sup->nama}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="alamat" id="alamat" value="{{$sup->alamat}}">
                        </div>
                        <label for="" class="col-sm-2 col-form-label">Kota :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="kota" id="kota" value="{{$sup->kota}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">No Telpon :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telp" id="telp" value="{{$sup->telp}}">
                        </div>
                        <!-- <label for="" class="col-sm-2 col-form-label">Dosen Wali :</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="dosen_wali" id="dosen_wali" readonly value="{{$sup->dosen_wali}}">
                </div> -->
                    </div>
                    <button type="submit" class="btn btn-primary col-sm-12">Simpan</button><br><br>
                    <a href="/supplier/index" type="button" class="btn btn-outline-warning col-sm-12">Batal</a>
                </form>
                @endforeach

            </div>
            <hr>

        </div>

    </div>
</div>
<!-- End of Main Content -->
@endsection