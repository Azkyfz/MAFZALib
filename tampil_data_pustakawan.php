<html>
	<head>
		<title>Menampilkan Data Perpustakaan</title>
	</head>
<body>
<style>
        body {
            background-image: url(Japanese\ Building.jpg); 
            height: 50vh;
            background-size: cover;
            background-position: center;
            min-height: 100px;
			display: inline-flex;
            list-style: none;
            color: #ffffff;
             }
</style>
<br><a href="Koneksi.html">Home</a>
<BR>Laporan Data Pustakawan<BR>
<?php
	Include "utama.php";
	$ambil="select nip,nama,jabatan,tempat_lahir,tanggal_lahir,kewarganegaraan,jenis_kelamin,agama,alamat,nomor_telepon from pustakawan limit 0,20";
	$lakukan=mysqli_query($connect,$ambil);
	echo "<table border='1'>
		<tr>
				<th>ID Pustakawan</th>
				<th>Nama Pustakawan</th>
				<th>Jabatan</th>
				<th>Kewarganegaraan</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th colspan='2'> Aksi</th>
		</tr>";
	while($hasil=mysqli_fetch_array($lakukan))
	{
		echo "<tr>";
		echo "<td>" . $hasil['nip'] . "</td>";
		echo "<td>" . $hasil['nama'] . "</td>";
		echo "<td>" . $hasil['jabatan'] . "</td>";
		echo "<td>" . $hasil['kewarganegaraan'] . "</td>";
		echo "<td>" . $hasil['jenis_kelamin'] . "</td>";
		echo "<td>" . $hasil['agama'] . "</td>";
		echo "<td><a href=edit_data_pustakawan.php?nip=$hasil[nip]>Edit</a></td>";
		echo "<td><a href=hapus_data_pustakawan.php?nip=$hasil[nip]>Hapus</a></td>";
		echo "</tr>";
	} 
	echo "</table>";
	mysqli_close($connect);
?>

</body>
</html>