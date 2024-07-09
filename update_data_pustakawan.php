<?php
include "utama.php";
$nip=($_POST['nip']);
$nama=($_POST['nama']);
$jabatan=($_POST['jabatan']);
$kewarganegaraan=($_POST['kewarganegaraan']);
$jenis_kelamin=($_POST['jenis_kelamin']);
$agama=($_POST['agama']);
mysqli_query($connect,"UPDATE pustakawan SET nip='$nip',nama='$nama',jabatan='$jabatan',kewarganegaraan='$kewarganegaraan',jenis_kelamin='$jenis_kelamin',agama='$agama' where nip='$nip'");
 	echo "Updated Data Sukses\n";

mysqli_close($connect);
?>
<br><a href=tampil_data_pustakawan.php>Lihat Data</a>
<br><a href=pustakawan.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>