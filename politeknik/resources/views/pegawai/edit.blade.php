@extends('layouts.header')
@section('title','Edit Data Pegawai')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @foreach ($datapg as $pg)
                <h4 style="text-align: center;" class="card-title">Edit Data Pegawai</h4>
                <form action="/pegawai/update/{{$pg->id_pg}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">ID Pegawai :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id_pg" id="id_pg" value="{{$pg->id_pg}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" value="{{$pg->nama}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="jk" id="jk" value="{{$pg->jk}}">
                        </div>
                        <label for="" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{$pg->tgl_lahir}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="alamat" id="alamat" value="{{$pg->alamat}}">
                        </div>
                        <label for="" class="col-sm-2 col-form-label">No Telpon :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="telp" id="telp" value="{{$pg->telp}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Bagian :</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" name="telp" id="telp" value="{{$pg->bagianpegawai->nama_bagian}}"> -->
                            <select name="id_bagian" class="form-control" style="color: black;">
                                <?php foreach ($databgpg as $pg1) : ?>
                                    <option type="text" value="<?= $pg1['id_bagian_pg'] ?>"><?= $pg1->nama_bagian ?> </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary col-sm-12">Simpan</button>
                    <br><br>
                    <a href="/pegawai/index" type="button" class="btn btn-outline-primary col-sm-12">Kembali</a>
                </form>
                <script>
                    var id = "{{$pg->bagianpegawai->id_bagian_pg}}"
                </script>
                @endforeach
            </div>
            <hr>

        </div>

    </div>

</div>
<!-- End of Main Content -->
@endsection