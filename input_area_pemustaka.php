<?php
include 'utama.php';
if(isset($_POST['submit']))
{
    $diskusi_pemustaka=addslashes($_POST['diskusi_pemustaka']);
    $kritik_perpustakaan=addslashes($_POST['kritik_perpustakaan']);
    $saran_perpustakaan=addslashes($_POST['saran_perpustakaan']);
    
    mysqli_query($connect,"INSERT INTO area_2 (diskusi_pemustaka,kritik_perpustakaan,saran_perpustakaan) VALUES ('$diskusi_pemustaka','$kritik_perpustakaan','$saran_perpustakaan')");
    echo "<br> Masukan Diterima
               Terima Kasih telah Berpartisipasi dalam Mengembangkan MAFZALibrary";
    echo "<br><a href=Koneksi.html>Home";
}
mysqli_close($connect);
?>