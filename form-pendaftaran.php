<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/styletiga.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran | SMKN 1 Gorontalo</title>
</head>
<body>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
        <h3>Formulir Pendaftaran</h3>
        <p>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat :</label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <label><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama :</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal :</label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah">
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" class="btndaftar" />
        </p>
        </fieldset>
    </form>
</body>
</html>