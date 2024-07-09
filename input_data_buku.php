<?php
include 'utama.php';
if(isset($_POST['submit']))
{
    $id_buku=addslashes($_POST['id_buku']);
    $judul_buku=addslashes($_POST['judul_buku']);
    $pengarang=addslashes($_POST['pengarang']);
    $jenis_pengarang=addslashes($_POST['jenis_pengarang']);
    $penerbit=addslashes($_POST['penerbit']);
    $tempat_terbit=addslashes($_POST['tempat_terbit']);
    $tahun_terbit=addslashes($_POST['tahun_terbit']);
    $fisik_buku=addslashes($_POST['fisik_buku']);
    $bahasa=addslashes($_POST['bahasa']);
    $edisi=addslashes($_POST['edisi']);
    $cetakan=addslashes($_POST['cetakan']);
    $isbn=addslashes($_POST['isbn']);
    $nomor_klasifikasi=addslashes($_POST['nomor_klasifikasi']);
    $nomor_rak=addslashes($_POST['nomor_rak']);

    mysqli_query($connect,"INSERT INTO buku (id_buku,judul_buku,pengarang,jenis_pengarang,penerbit,tempat_terbit,tahun_terbit,fisik_buku,bahasa,edisi,cetakan,isbn,nomor_klasifikasi,nomor_rak) VALUES ('$id_buku','$judul_buku','$pengarang','$jenis_pengarang','$penerbit','$tempat_terbit','$tahun_terbit','$fisik_buku','$bahasa','$edisi','$cetakan','$isbn','$nomor_klasifikasi','$nomor_rak')");
    echo "<br> Data Sudah Dimasukkan";
    echo "<br><a href=tampil_data_buku.php>Tampilkan Data Buku";
    echo "<br><a href=Koneksi.html>Home";
}
mysqli_close($connect);
?>