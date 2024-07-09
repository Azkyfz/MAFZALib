<?php
include 'utama.php';
if(isset($_POST['submit']))
{
    $nip=addslashes($_POST['nip']);
    $nama=addslashes($_POST['nama']);
    $jabatan=addslashes($_POST['jabatan']);
    $tempat_lahir=addslashes($_POST['tempat_lahir']);
    $tanggal_lahir=addslashes($_POST['tanggal_lahir']);
    $kewarganegaraan=addslashes($_POST['kewarganegaraan']);
    $jenis_kelamin=addslashes($_POST['jenis_kelamin']);
    $agama=addslashes($_POST['agama']);
    $alamat=addslashes($_POST['alamat']);
    $nomor_telepon=addslashes($_POST['nomor_telepon']);

    mysqli_query($connect,"INSERT INTO pustakawan (nip,nama,jabatan,tempat_lahir,tanggal_lahir,kewarganegaraan,jenis_kelamin,agama,alamat,nomor_telepon) VALUES ('$nip','$nama','$jabatan','$tempat_lahir','$tanggal_lahir','$kewarganegaraan','$jenis_kelamin','$agama','$alamat','$nomor_telepon')");
    echo "<br> Data Sudah Dimasukkan";
    echo "<br><a href=tampil_data_pustakawan.php>Tampilkan Data Pustakawan";
    echo "<br><a href=Koneksi.html>Home";
}
mysqli_close($connect);
?>