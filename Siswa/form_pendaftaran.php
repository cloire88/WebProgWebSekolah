<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h2>Formulir Pendaftaran</h2>

    <form method = "POST" action = "Siswa/proses_pendaftaran.php">
    
        <p>
        <label for = "nama" >Nama : </label>
        <input name = "nama" type = "text" placeholder = "masukkan nama">
        </p>

        <p>
        <label for = "jk" >Jenis Kelamin : </label>
			<label><input type="radio" name="jk" value="L"> Laki-laki</label>
			<label><input type="radio" name="jk" value="P"> Perempuan</label>
        </p>

        <p>
        <label for = "alamat" >Alamat : </label>
        <input name = "alamat" type = "text" placeholder = "masukkan alamat">
        </p>

        <p>
        <label for = "jurusan">Jurusan : </label>
        <select name = "jurusan">
            <option>IPA</option>
            <option>IPS</option>
            <option>Bahasa</option>
        </select>
        </p>

        <input type="submit" value="Daftar" name="daftar" />

    </form>

    <br>

    <a href = "../index.php">kembali</a>

</body>
</html>