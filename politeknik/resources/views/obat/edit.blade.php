@extends('layouts.header')
@section('title','Edit Data Obat')
@section('content')
<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @foreach ($dataob as $ob)
                <h4 style="text-align: center;" class="card-title">Edit Data Obat</h4>
                <form action="/obat/update/{{$ob->id_obat}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">ID Obat :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="id_obat" id="id_pg" readonly value="{{$ob->id_obat}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama Obat :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="id_pg" value="{{$ob->nama}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Tipe :</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" name="id_tipe" id="nama" value="{{$ob->tipeob->tipe}}"> -->
                            <select name="id_tipe" class="form-control" style="color: black;">
                                @foreach($tpob as $tp)
                                <option value="{{$tp->id_tp_obat}}">{{$tp->tipe}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Kategori :</label>
                        <div class="col-sm-4">
                            <!-- <input type="text" class="form-control" name="jk" id="jk" value="{{$ob->ktgob->kategori}}"> -->
                            <select name="id_kategori" class="form-control" style="color: black;">
                                @foreach($ktob as $kt)
                                <option value="{{$kt->id_kgr_obat}}">{{$kt->kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="" class="col-sm-2 col-form-label">Tanggal Expired :</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="tgl_expired" id="tgl_expired" value="{{$ob->tgl_expired}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Harga Beli :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="hrg_beli" id="alamat" value="{{$ob->hrg_beli}}">
                        </div>
                        <label for="" class="col-sm-2 col-form-label">Harga Jual :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="hrg_jual" id="telp" value="{{$ob->hrg_jual}}">
                        </div>
                        <!-- <div class="col-sm-9">
                    </div> -->
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Supplier :</label>
                        <div class="col-sm-4">
                            <!-- <input type="text" class="form-control" name="" id="jk" value="{{$ob->supplierob->nama}}"> -->
                            <select name="id_supplier" class="form-control" style="color: black;">
                                @foreach($spob as $sp)
                                <option value="{{$sp->id_sup}}">{{$sp->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="" class="col-sm-2 col-form-label">Stok :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="stok" id="tgl_expired" value="{{$ob->stok}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary col-sm-12">Simpan</button><br><br>
                    <a href="/obat/index" type="button" class="btn btn-outline-warning col-sm-12">Batal</a>
                </form>
                <script>
                    var id1 = "{{$ob->tipeob->id_tp_obat}}"
                    var id2 = "{{$ob->ktgob->id_kgr_obat}}"
                    var id3 = "{{$ob->supplierob->id_sup}}"
                </script>
                @endforeach
            </div>
            <hr>


        </div>

    </div>

</div>
<!-- End of Main Content -->
@endsection