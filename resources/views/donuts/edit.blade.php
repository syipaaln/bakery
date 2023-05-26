<!DOCTYPE html>
<html>
    <head>
        <title>halaman edit</title>
    </head>
    <body>
        <form method="POST" action="{{ route('donuts.post') }}">
            @csrf
            <input type="hidden" name="id" value="{{$donuts->id}}">
            <fieldset>
                <legend>Edit data donat</legend>
                <p>
                    <label>Nama:</label>
                    <input type="text" name="nama" value="{{$donuts->nama}}" placeholder="Masukan Nama Donat"
                    />
                </p>
                <p>
                    <label>Harga:</label>
                    <input type="number" name="harga"value="{{$donuts->harga}}" placeholder="Masukan Harga Donat"
                    />
                </p>
                <p>
                    <label>Foto:</label>
                    <input type="file" name="foto" value="{{$donuts->foto}}" id="foto">{!! $donuts->foto
                    !!}
                </p>

                <button type="submit"></i> SIMPAN</button>
            </fieldset>
        </form>
    </body>
</html>