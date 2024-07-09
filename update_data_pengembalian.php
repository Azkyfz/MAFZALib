<?php
include "utama.php";
$id_peminjaman=($_POST['id_peminjaman']);
$id_buku=($_POST['id_buku']);
$judul_buku=($_POST['judul_buku']);
$tanggal_kembali=($_POST['tanggal_kembali']);
mysqli_query($connect,"UPDATE pengembalian SET id_peminjaman='$id_peminjaman',id_buku='$id_buku',judul_buku='$judul_buku',tanggal_kembali='$tanggal_kembali' WHERE id_peminjaman='$id_peminjaman'");
 	echo "Updated Data Sukses\n";

mysqli_close($connect);
?>
<br><a href=tampil_data_pengembalian.php>Lihat Data</a>
<br><a href=pengembalian.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>