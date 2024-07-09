<?php
include "utama.php";
$id_peminjaman=$_GET['id_peminjaman'];
$hapus=mysqli_query ($connect,"delete from pengembalian where id_peminjaman='$id_peminjaman'");
if($hapus)
{
    echo "Data Terhapus";
}
else
{
    echo "Data Gagal Dihapus";
}
?>
<hr>
<a href=tampil_data_pengembalian.php>Lihat Data</a>
<br><a href=pengembalian.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>