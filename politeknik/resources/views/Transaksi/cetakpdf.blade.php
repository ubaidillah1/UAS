<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak PDF Transaksi</title>
</head>
<style type="text/css">
    h2 {
        text-align: center;
        font-size: 22px;
        margin-bottom: 50px;
    }

    body {
        background: #f2f2f2;
        font-family: sans-serif;
    }

    table {
        margin: 20px auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid #3c3c3c;
        padding: 3px 8px;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="panel-heading">
            <h2>Cetak Data Transaksi</h2>
        </div>
        <center>
        <!-- <img style="width: 20%; height: 20%;" src="{{asset('majestic/images/apotek.png')}}" alt=""> -->
        </center>
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
                </tr>
            </thead>
            <tbody>
                @forelse ($ndata as $tr)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$tr->nama_pembeli}}</td>
                    <td>{{$tr->hrgjual->nama}}</td>
                    <td>{{$tr->jumlah}}</td>
                    <td>{{$tr->tgl_jual}}</td>
                    <td>{{$tr->sales->nama}}</td>
                    <td>Rp. {{$tr->hrgjual->hrg_jual*$tr->jumlah}}</td>

                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center">Tidak Ada Data </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>

</html>