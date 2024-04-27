<?php 

include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/styledua.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar | SMKN 1 GORONTALO</title>
</head>
<body>
    <div class="container">
        <header>
            <h3>Siswa yang sudah mendaftar</h3>
        </header>
        <div class="navbar">
            <nav>
                <a href="form-pendaftaran.php">
                    <p>[+] Tambah baru</p>
                </a>
            </nav>
        </div>
        <div class="tabelpendaftar">

            <table border="1" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="row">No</th>
                        <th scope="row">Nama</th>
                        <th scope="row">Alamat</th>
                        <th scope="row">Jenis Kelamin</th>
                        <th scope="row">Agama</th>
                        <th scope="row">Sekolah Asal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = "SELECT * FROM vsga_calon_siswa";
                    $query = mysqli_query($db, $sql);
    
                    while($siswa = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td>".$siswa['id']."</td>";
                        echo "<td>".$siswa['nama']."</td>";
                        echo "<td>".$siswa['alamat']."</td>";
                        echo "<td>".$siswa['jenis_kelamin']."</td>";
                        echo "<td>".$siswa['agama']."</td>";
                        echo "<td>".$siswa['sekolah_asal']."</td>";
    
                        echo "</tr>";
                    }
    
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>