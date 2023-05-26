<!DOCTYPE html>
<html>
    <head>
        <title>halaman create</title>
    </head>
    <body>
        <form method="POST" action="{{ route('donuts.post') }}" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <legend>input donat</legend>
                <p>
                    <label>Nama:</label>
                    <input type="text" name="nama" placeholder="Masukan Nama Donat" />
                </p>
                <p>
                    <label>Harga:</label>
                    <input type="number" name="harga" placeholder="Masukan Harga Donat" />
                </p>
                <p>
                    <label>Foto:</label>
                    <input type="file" name="foto" id="foto">
                </p>
                <button type="submit"></i> SIMPAN</button>
            </fieldset>
        </form>
    </body>
</html>