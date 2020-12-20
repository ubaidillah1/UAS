@extends('layouts.header')
@section('title','Supplier')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <p style="text-align: center;" class="card-title">Data Supplier</p>
          <div class="d-sm-flex justify-content-center">
            <form class="form-inline my-2 my-lg-0" action="/supplier/search" method="POST">
              @csrf
              <input class="form-control mr-sm-12" type="text" name="cari" placeholder="Cari Supplier" id="cari" aria-label="cari" value="{{old('cari')}}">
              <button class="btn btn-outline-success my-12 my-sm-12" type="submit">Cari</button>
            </form>
          </div>
          <a href="/supplier/exportpdf" type="button" id="PdfData" class="btn mr-2 mb-2 btn-danger">
            <i class="fa fa-download fa-w-20"></i>
            Export PDF
          </a>
          <a href="/supplier/exportexcel" type="button" id="PdfData" class="btn mr-2 mb-2 btn-success">
            <i class="fa fa-download fa-w-20"></i>
            Export Excel
          </a>
          <div class="table-responsive">
            <table id="recent-purchases-listing" class="table">
              <thead class="thead-light">
                <tr align="center">
                  <th scope="col">#</th>
                  <!-- <th scope="col">ID Supplier</th> -->
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Kota</th>
                  <th scope="col">No Telpon</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($ndata as $sp)
                <tr>
                  <td>{{$loop->iteration + $ndata->firstItem() - 1}}</td>
                  <!-- <td>{{$sp->id_sup}}</td> -->
                  <td>{{$sp->nama}}</td>
                  <td>{{$sp->alamat}}</td>
                  <td>{{$sp->kota}}</td>
                  <td>{{$sp->telp}}</td>
                  <td align="center">
                    <a class="btn btn-primary btn-sm" href="/supplier/show/{{$sp->id_sup}}" role="button">
                      Detail
                    </a>
                    <a class="btn btn-warning btn-sm" href="/supplier/edit/{{$sp->id_sup}}" role="button">
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="/supplier/delete/{{$sp->id_sup}}" role="button">
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
            <a href="/supplier/create" type="button" class="btn btn-outline-primary">Tambah Supplier</a>
            <hr>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection