<?php
include "utama.php";
$id_buku=$_GET['id_buku'];
$hapus=mysqli_query ($connect,"delete from buku where id_buku='$id_buku'");
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
<a href=tampil_data_buku.php>Lihat Data</a>
<br><a href=buku.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>