<?php
include "utama.php";
$id_denda=$_GET['id_denda'];
$hapus=mysqli_query ($connect,"delete from denda where id_denda='$id_denda'");
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
<a href=tampil_data_denda.php>Lihat Data</a>
<br><a href=denda.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>