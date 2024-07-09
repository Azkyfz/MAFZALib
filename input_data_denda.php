<?php
include 'utama.php';
if(isset($_POST['submit']))
{
    $id_denda=addslashes($_POST['id_denda']);
    $id_peminjaman=addslashes($_POST['id_peminjaman']);
    $id_buku=addslashes($_POST['id_buku']);
    $judul_buku=addslashes($_POST['judul_buku']);
    $id_pemustaka=addslashes($_POST['id_pemustaka']);
    $nama_pemustaka=addslashes($_POST['nama_pemustaka']);
    $tanggal_pinjam=addslashes($_POST['tanggal_pinjam']);
    $jatuh_tempo=addslashes($_POST['jatuh_tempo']);
    $tanggal_kembali=addslashes($_POST['tanggal_kembali']);
    $denda_perhari=addslashes($_POST['denda_perhari']);
    $jumlah_hari=addslashes($_POST['jumlah_hari']);
    $total_denda=addslashes($_POST['total_denda']);

    mysqli_query($connect,"INSERT INTO denda (id_denda,id_peminjaman,id_buku,judul_buku,id_pemustaka,nama_pemustaka,tanggal_pinjam,jatuh_tempo,tanggal_kembali,denda_perhari,jumlah_hari,total_denda) VALUES ('$id_denda','$id_peminjaman','$id_buku','$judul_buku','$id_pemustaka','$nama_pemustaka','$tanggal_pinjam','$jatuh_tempo','$tanggal_kembali','$denda_perhari','$jumlah_hari','$total_denda')");
    echo "<br> Data Sudah Dimasukkan";
    echo "<br><a href=tampil_data_denda.php>Tampilkan Data Denda";
    echo "<br><a href=Koneksi.html>Home";
}
mysqli_close($connect);
?>