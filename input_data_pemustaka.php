<?php
include 'utama.php';
if(isset($_POST['submit']))
{
    $id_pemustaka=addslashes($_POST['id_pemustaka']);
    $nama=addslashes($_POST['nama']);
    $status_pemustaka=addslashes($_POST['status_pemustaka']);
    $tempat_lahir=addslashes($_POST['tempat_lahir']);
    $tanggal_lahir=addslashes($_POST['tanggal_lahir']);
    $kewarganegaraan=addslashes($_POST['kewarganegaraan']);
    $pekerjaan=addslashes($_POST['pekerjaan']);
    $jenis_kelamin=addslashes($_POST['jenis_kelamin']);
    $agama=addslashes($_POST['agama']);
    $alamat=addslashes($_POST['alamat']);
    $nomor_telepon=addslashes($_POST['nomor_telepon']);
    $masa_aktif=addslashes($_POST['masa_aktif']);

    mysqli_query($connect,"INSERT INTO pemustaka (id_pemustaka,nama,status_pemustaka,tempat_lahir,tanggal_lahir,kewarganegaraan,pekerjaan,jenis_kelamin,agama,alamat,nomor_telepon,masa_aktif) VALUES ('$id_pemustaka','$nama','$status_pemustaka','$tempat_lahir','$tanggal_lahir','$kewarganegaraan','$pekerjaan','$jenis_kelamin','$agama','$alamat','$nomor_telepon','$masa_aktif')");
    echo "<br> Data Sudah Dimasukkan";
    echo "<br><a href=tampil_data_pemustaka.php>Tampilkan Data Pemustaka";
    echo "<br><a href=Koneksi.html>Home";
}
mysqli_close($connect);
?>