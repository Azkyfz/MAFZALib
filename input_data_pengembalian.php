<?php
include 'utama.php';
if(isset($_POST['submit']))
{
    $id_peminjaman=addslashes($_POST['id_peminjaman']);
    $id_buku=addslashes($_POST['id_buku']);
    $judul_buku=addslashes($_POST['judul_buku']);
    $tanggal_kembali=addslashes($_POST['tanggal_kembali']);
    
    mysqli_query($connect,"INSERT INTO pengembalian (id_peminjaman,id_buku,judul_buku,tanggal_kembali) VALUES ('$id_peminjaman','$id_buku','$judul_buku','$tanggal_kembali')");
    echo "<br> Data Sudah Dimasukkan";
    echo "<br><a href=tampil_data_pengembalian.php>Tampilkan Data Pengembalian";
    echo "<br><a href=Koneksi.html>Home";
}
mysqli_close($connect);
?>