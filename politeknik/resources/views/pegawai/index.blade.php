@extends('layouts.header')
@section('title','Pegawai')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <p style="text-align: center;" class="card-title">Data Pegawai Apotek</p>
                    <div class="d-sm-flex justify-content-center">
                        <form class="form-inline my-2 my-lg-0" action="/pegawai/search" method="POST">
                            @csrf
                            <input class="form-control mr-sm-12" type="text" name="cari" placeholder="Cari Pegawai"
                                id="cari" aria-label="cari" value="{{old('cari')}}">
                            <button class="btn btn-outline-success my-12 my-sm-12" type="submit">Cari</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table id="recent-purchases-listing" class="table">
                            <thead class="thead-light">
                                <tr align="center">
                                    <th scope="col">#</th>
                                    <th scope="col">ID Pegawai</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telpon</th>
                                    <th scope="col">Bagian</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $pg)
                                <tr>
                                    <td>{{$loop->iteration + $data->firstItem() - 1}}</td>
                                    <td>{{$pg->id_pg}}</td>
                                    <td>{{$pg->nama}}</td>
                                    <td>{{$pg->tgl_lahir}}</td>
                                    <td>{{$pg->alamat}}</td>
                                    <td>{{$pg->telp}}</td>
                                    <td>{{$pg->bagianpegawai->nama_bagian}}</td>
                                    <td align="center">
                                        <a class="btn btn-primary btn-sm" href="/pegawai/show/{{$pg->id_pg}}"
                                            role="button">
                                            Detail
                                        </a>
                                        <a class="btn btn-warning btn-sm" href="/pegawai/edit/{{$pg->id_pg}}"
                                            role="button">
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="/pegawai/delete/{{$pg->id_pg}}"
                                            role="button">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" style="text-align: center">Tidak Ada Data </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <a href="/pegawai/create" type="button" class="btn btn-outline-primary">Tambah Pegawai</a>
                        <hr>
                        <div class="d-sm-flex justify-content-center">
                            {{ $data->links("pagination::bootstrap-4") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection