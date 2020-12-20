@extends('layouts.header')
@section('title','Obat')
@section('content')
<div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <p style="text-align: center;" class="card-title">Data Obat</p>
              <div class="d-sm-flex justify-content-center">
              <form class="form-inline my-2 my-lg-0" action="/obat/search" method="POST">
                @csrf
                <input class="form-control mr-sm-12" type="text" name="cari" placeholder="Cari Obat" id="cari" aria-label="cari" value="{{old('cari')}}">
                <button class="btn btn-outline-success my-12 my-sm-12" type="submit">Cari</button>
              </form>
               </div>
              <div class="table-responsive">
                <table id="recent-purchases-listing" class="table">
                  <thead class="thead-light">
                    <tr align="center">
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Tipe</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Tanggal Kadaluarsa</th>
                      <th scope="col">Harga Jual</th>
                      <th scope="col">Stok</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>                                                                                            
                  <tbody> 
                    @forelse ($dataob as $ob)
                    <tr>
                      <td>{{$loop->iteration + $dataob->firstItem() - 1}}</td>
                      <td>{{$ob->nama}}</td>
                      <td>{{$ob->tipeob->tipe}}</td>
                      <td>{{$ob->ktgob->kategori}}</td>
                      <td>{{$ob->tgl_expired}}</td>
                      <td>Rp. {{$ob->hrg_jual}} -.</td>
                      <td>{{$ob->stok}}</td>
                      <td align="center">
                        <a class="btn btn-primary btn-sm"
                            href="/obat/show/{{$ob->id_obat}}" role="button">
                            Detail
                        </a>
                        <a class="btn btn-warning btn-sm"
                            href="/obat/edit/{{$ob->id_obat}}" role="button">
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm"
                            href="/obat/delete/{{$ob->id_obat}}" role="button">
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
                  <a  href="/obat/create"  type="button" class="btn btn-outline-primary">Tambah Obat</a>
                  <hr>
                    <div class="d-sm-flex justify-content-center">
                    {{$dataob->links("pagination::bootstrap-4")}}
                    </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>

@endsection
