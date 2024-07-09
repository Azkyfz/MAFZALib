<?php
include "utama.php";
$id_peminjaman=$_GET['id_peminjaman'];
$hapus=mysqli_query ($connect,"delete from peminjaman where id_peminjaman='$id_peminjaman'");
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
<a href=tampil_data_peminjaman.php>Lihat Data</a>
<br><a href=peminjaman.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>