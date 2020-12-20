<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak PDF Supplier</title>
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
            <h2>Cetak Data Supplier</h2>
        </div>
        <table id="recent-purchases-listing" class="table">
            <thead class="thead-light">
                <tr align="center">
                    <th scope="col">#</th>
                    <!-- <th scope="col">ID Supplier</th> -->
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kota</th>
                    <th scope="col">No Telpon</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ndata as $sp)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <!-- <td>{{$sp->id_sup}}</td> -->
                    <td>{{$sp->nama}}</td>
                    <td>{{$sp->alamat}}</td>
                    <td>{{$sp->kota}}</td>
                    <td>{{$sp->telp}}</td>
                    
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