<?php
include 'utama.php';
if(isset($_POST['submit']))
{
    $diskusi_pustakawan=addslashes($_POST['diskusi_pustakawan']);
    $timbal_balik_perpustakaan=addslashes($_POST['timbal_balik_perpustakaan']);
    
    mysqli_query($connect,"INSERT INTO area_1 (diskusi_pustakawan,timbal_balik_perpustakaan) VALUES ('$diskusi_pustakawan','$timbal_balik_perpustakaan')");
    echo "<br> Masukan Diterima
               Terima Kasih telah Berpartisipasi dalam Mengembangkan MAFZALibrary";
    echo "<br><a href=Koneksi.html>Home";
}
mysqli_close($connect);
?>