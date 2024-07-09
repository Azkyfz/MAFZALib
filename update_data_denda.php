<?php
include "utama.php";
	$id_denda=($_POST['id_denda']);
    $id_buku=($_POST['id_buku']);
    $judul_buku=($_POST['judul_buku']);
    $tanggal_pinjam=($_POST['tanggal_pinjam']);
    $jatuh_tempo=($_POST['jatuh_tempo']);
    $tanggal_kembali=($_POST['tanggal_kembali']);
    $denda_perhari=($_POST['denda_perhari']);
    $jumlah_hari=($_POST['jumlah_hari']);
    $total_denda=($_POST['total_denda']);
mysqli_query($connect,"UPDATE denda SET id_denda='$id_denda',id_buku='$id_buku',judul_buku='$judul_buku',tanggal_pinjam='$tanggal_pinjam',jatuh_tempo='$jatuh_tempo',tanggal_kembali='$tanggal_kembali',denda_perhari='$denda_perhari',jumlah_hari='$jumlah_hari',total_denda='$total_denda' WHERE id_denda='$id_denda'");
 	echo "Updated Data Sukses\n";

mysqli_close($connect);
?>
<br><a href=tampil_data_denda.php>Lihat Data</a>
<br><a href=denda.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>
