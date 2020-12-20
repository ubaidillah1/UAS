@extends('layouts.header')
@section('title','Transaksi')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <p style="text-align: center;" class="card-title">Data Transaksi</p>
                    <div class="d-sm-flex justify-content-center">
                        <form class="form-inline my-2 my-lg-0" action="/transaksi/search" method="POST">
                            @csrf
                            <input class="form-control mr-sm-12" type="text" name="cari" placeholder="Cari Transaksi" id="cari" aria-label="cari" value="{{old('cari')}}">
                            <button class="btn btn-outline-success my-12 my-sm-12" type="submit">Cari</button>
                        </form>
                    </div>
                    <a href="/transaksi/exportpdf" type="button" id="PdfData" class="btn mr-2 mb-2 btn-danger">
                        <i class="fa fa-download fa-w-20"></i>
                        Export PDF
                    </a>
                    <a href="/transaksi/exportexcel" type="button" id="PdfData" class="btn mr-2 mb-2 btn-success">
                        <i class="fa fa-download fa-w-20"></i>
                        Export Excel
                    </a>
                    <div class="table-responsive">
                        <table id="recent-purchases-listing" class="table">
                            <thead class="thead-light">
                                <tr align="center">
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Pembeli</th>
                                    <th scope="col">Obat di beli</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Tanggal Jual</th>
                                    <th scope="col">Sales</th>
                                    <th scope="col">Total Harga Pembelian</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($ndata as $tr)
                                <tr>
                                    <td>{{$loop->iteration + $ndata->firstItem() - 1}}</td>
                                    <td>{{$tr->nama_pembeli}}</td>
                                    <td>{{$tr->hrgjual->nama}}</td>
                                    <td>{{$tr->jumlah}}</td>
                                    <td>{{$tr->tgl_jual}}</td>
                                    <td>{{$tr->sales->nama}}</td>
                                    <td>Rp. {{$tr->hrgjual->hrg_jual*$tr->jumlah}}</td>
                                    <td align="center">
                                        <a class="btn btn-primary btn-sm" href="/transaksi/show/{{$tr->kode_trx}}" role="button">
                                            Detail
                                        </a>
                                        <a class="btn btn-warning btn-sm" href="/transaksi/edit/{{$tr->kode_trx}}" role="button">
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="/transaksi/delete/{{$tr->kode_trx}}" role="button">
                                            Hapus
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
                        <div class="d-sm-flex justify-content-center">
                            {{ $ndata->links("pagination::bootstrap-4") }}
                        </div>
                        <a href="/transaksi/create" type="button" class="btn btn-outline-primary">Tambah Transaksi</a>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection