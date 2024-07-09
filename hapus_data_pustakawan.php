<?php
include "utama.php";
$nip=$_GET['nip'];
$hapus=mysqli_query ($connect,"delete from pustakawan where nip='$nip'");
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
<a href=tampil_data_pustakawan.php>Lihat Data</a>
<br><a href=pustakawan.html>Input Data</a>
<br><a href="Koneksi.html">Home</a>