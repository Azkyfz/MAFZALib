<?php
include "utama.php";
$id_peminjaman=($_POST['id_peminjaman']);
$id_buku=($_POST['id_buku']);
$nama_pemustaka=($_POST['nama_pemustaka']);
$judul_buku=($_POST['judul_buku']);
$tanggal_pinjam=($_POST['tanggal_pinjam']);
$tanggal_kembali=($_POST['tanggal_kembali']);
mysqli_query($connect,"UPDATE peminjaman SET id_peminjaman='$id_peminjaman',id_buku='$id_buku',judul_buku='$judul_buku',nama_pemustaka='$nama_pemustaka',tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali' WHERE id_peminjaman='$id_peminjaman'");
 	echo "Updated Data Sukses\n";

mysqli_close($connect);
?>
<br><a href=tampil_data_peminjaman.php>Lihat Data</a>
<br><a href=peminjaman.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>