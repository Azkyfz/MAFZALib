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
<BR>Laporan Data Pemustaka<BR>
<br><a href="Koneksi.html">Home</a>
<?php
	Include "utama.php";
	$ambil="select id_pemustaka,nama,status_pemustaka,tempat_lahir,tanggal_lahir,kewarganegaraan,pekerjaan,jenis_kelamin,agama,alamat,nomor_telepon,masa_aktif from pemustaka limit 0,20";
	$lakukan=mysqli_query($connect,$ambil);
	echo "<table border='1'>
		<tr>
				<th>ID Pemustaka</th>
				<th>Nama Anggota</th>
				<th>Status Pemustaka</th>
				<th>Kewarganegaraan</th>
				<th>Pekerjaan</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th colspan='2'> Aksi</th>
		</tr>";
	while($hasil=mysqli_fetch_array($lakukan))
	{
		echo "<tr>";
		echo "<td>" . $hasil['id_pemustaka'] . "</td>";
		echo "<td>" . $hasil['nama'] . "</td>";
		echo "<td>" . $hasil['status_pemustaka'] . "</td>";
		echo "<td>" . $hasil['kewarganegaraan'] . "</td>";
		echo "<td>" . $hasil['pekerjaan'] . "</td>";
		echo "<td>" . $hasil['jenis_kelamin'] . "</td>";
		echo "<td>" . $hasil['agama'] . "</td>";
		echo "<td><a href=edit_data_pemustaka.php?id_pemustaka=$hasil[id_pemustaka]>Edit</a></td>";
		echo "<td><a href=hapus_data_pemustaka.php?id_pemustaka=$hasil[id_pemustaka]>Hapus</a></td>";
		echo "</tr>";
	} 
	echo "</table>";
	mysqli_close($connect);
?>

</body>
</html>