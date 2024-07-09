<?php
include "utama.php";
$id_pemustaka=($_POST['id_pemustaka']);
$nama=($_POST['nama']);
$status_pemustaka=($_POST['status_pemustaka']);
$kewarganegaraan=($_POST['kewarganegaraan']);
$pekerjaan=($_POST['pekerjaan']);
$jenis_kelamin=($_POST['jenis_kelamin']);
$agama=($_POST['agama']);
mysqli_query($connect,"UPDATE pemustaka SET id_pemustaka='$id_pemustaka',nama='$nama',status_pemustaka='$status_pemustaka',kewarganegaraan='$kewarganegaraan',pekerjaan='$pekerjaan',jenis_kelamin='$jenis_kelamin',agama='$agama' WHERE id_pemustaka='$id_pemustaka'");
 	echo "Updated Data Sukses\n";

mysqli_close($connect);
?>
<br><a href=tampil_data_pemustaka.php>Lihat Data</a>
<br><a href=pemustaka.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>