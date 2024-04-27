<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "vsga_pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $database);

if (!$db) {
    die("Database gagal terhubung : ".mysqli_connect_error());
}

?>