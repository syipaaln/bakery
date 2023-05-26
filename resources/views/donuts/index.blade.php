<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>halaman index</title>
    </head>
    <body>
        <h3>Halaman penampungan data yang di buat</h3>
        <a href="{{route('donuts.create') }}">Tambah data donat</a><br><br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>foto</th>
                <th>Aksi</th>
            </tr>
            <?php $nomor = 1 ; ?>
            @foreach ($donuts as $no => $donuts)
            <tr>
                <td>{{ $nomor ++}}</td>
                <td>{{ $donuts -> nama }}</td>
                <td>{{ $donuts -> harga }}</td>
                <td>
                    <img src="{{ asset('/image/'.$donuts->foto)}}" alt="" width="120px">
                </td>
                <td class="text-center">
                    <a href="{{ route('donuts.edit', $donuts->id) }}">
                    edit</a>
                    <a href="/donuts/index/delete/{{ $donuts->id }}">hapus
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>