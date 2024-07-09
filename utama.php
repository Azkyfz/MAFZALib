<?php
$host='localhost';
$user='root';
$password='';
$DBNM='sistem_informasi_perpustakaan'; 

$connect=mysqli_connect ($host,$user,$password);
if ($connect)
{
$select=mysqli_select_db ($connect,$DBNM);
    if ($select)
    {
        echo ("its works");
    }
    else
    {
        die ("database tidak tersedia");
    }
}
?>