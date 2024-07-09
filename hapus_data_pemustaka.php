<?php
include "utama.php";
$id_pemustaka=$_GET['id_pemustaka'];
$hapus=mysqli_query ($connect,"delete from pemustaka where id_pemustaka='$id_pemustaka'");
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
<a href=tampil_data_pemustaka.php>Lihat Data</a>
<br><a href=pemustaka.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>