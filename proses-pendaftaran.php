<?php 

include("config.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolahasal = $_POST['sekolah_asal'];

    $sql = "INSERT INTO vsga_calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jeniskelamin', '$agama', '$sekolahasal')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>