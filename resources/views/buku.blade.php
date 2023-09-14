<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iam</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>Halaman buku</h1>
<script src="js/script.js"></script>
<table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Bukus</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tgl. Terbit</th>
                <th>Aksi</th>   
            </tr>
        </thead>
        <tbody>
           @foreach($data_buku as $buku)
                <tr>
                    <td>{{ $buku->id }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}<td>
                    <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.') }}</td>
                    <td>{{ ($buku->tgl_terbit)->format('d/m/Y') }}</td>
                </tr>
           @endforeach
        </tbody>
   </table>
   <h3>Jumlah data yang dimiliki = {{ $count }}</h3>
   <h3>Total harga semua buku = {{ $total }}</h3>
</body>
</html>