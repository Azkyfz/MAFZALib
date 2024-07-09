<?php
include "utama.php";
	$id_buku=($_POST['id_buku']);
    $judul_buku=($_POST['judul_buku']);
    $pengarang=($_POST['pengarang']);
    $jenis_pengarang=($_POST['jenis_pengarang']);
    $penerbit=($_POST['penerbit']);
    $tempat_terbit=($_POST['tempat_terbit']);
    $tahun_terbit=($_POST['tahun_terbit']);
    $fisik_buku=($_POST['fisik_buku']);
    $bahasa=($_POST['bahasa']);
    $edisi=($_POST['edisi']);
    $cetakan=($_POST['cetakan']);
    $isbn=($_POST['isbn']);
    $nomor_klasifikasi=($_POST['nomor_klasifikasi']);
    $nomor_rak=($_POST['nomor_rak']);
mysqli_query($connect,"UPDATE buku SET id_buku='$id_buku',judul_buku='$judul_buku',pengarang='$pengarang',jenis_pengarang='$jenis_pengarang',penerbit='$penerbit',tempat_terbit='$tempat_terbit',tahun_terbit='$tahun_terbit',fisik_buku='$fisik_buku',bahasa='$bahasa',edisi='$edisi',cetakan='$cetakan',isbn='$isbn',nomor_klasifikasi='$nomor_klasifikasi',nomor_rak='$nomor_rak' WHERE id_buku='$id_buku'");
 	echo "Updated Data Sukses\n";

mysqli_close($connect);
?>
<br><a href=tampil_data_buku.php>Lihat Data</a>
<br><a href=buku.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>