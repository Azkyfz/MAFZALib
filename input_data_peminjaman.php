<?php
include 'utama.php';
if(isset($_POST['submit']))
{
    $id_peminjaman=addslashes($_POST['id_peminjaman']);
    $id_buku=addslashes($_POST['id_buku']);
    $judul_buku=addslashes($_POST['judul_buku']);
    $id_pemustaka=addslashes($_POST['id_pemustaka']);
    $nama_pemustaka=addslashes($_POST['nama_pemustaka']);
    $tanggal_pinjam=addslashes($_POST['tanggal_pinjam']);
    $tanggal_kembali=addslashes($_POST['tanggal_kembali']);

    mysqli_query($connect,"INSERT INTO peminjaman (id_peminjaman,id_buku,judul_buku,id_pemustaka,nama_pemustaka,tanggal_pinjam,tanggal_kembali) VALUES ('$id_peminjaman','$id_buku','$judul_buku','$id_pemustaka','$nama_pemustaka','$tanggal_pinjam','$tanggal_kembali')");
    echo "<br> Data Sudah Dimasukkan";
    echo "<br><a href=tampil_data_peminjaman.php>Tampilkan Data Peminjaman";
    echo "<br><a href=Koneksi.html>Home";
}
mysqli_close($connect);
?>