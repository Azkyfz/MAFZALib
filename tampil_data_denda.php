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
<BR>Laporan Data Denda<BR>
<?php
	Include "utama.php";
	$ambil="select id_denda,id_peminjaman,id_buku,judul_buku,id_pemustaka,nama_pemustaka,tanggal_pinjam,jatuh_tempo,tanggal_kembali,denda_perhari,jumlah_hari,total_denda from denda limit 0,20";
	$lakukan=mysqli_query($connect,$ambil);
	echo "<table border='1'>
		<tr>
				<th>ID Denda</th>
				<th>ID Buku</th>
				<th>Judul Buku</th>
				<th>Tanggal Pinjam</th>
				<th>Jatuh Tempo</th>
                <th>Tanggal Kembali</th>
				<th>Denda Perhari</th>
				<th>Jumlah Hari</th>
				<th>Total Denda</th>
				<th colspan='2'> Aksi</th>
		</tr>";
	while($hasil=mysqli_fetch_array($lakukan))
	{
		echo "<tr>";
		echo "<td>" . $hasil['id_denda'] . "</td>";
		echo "<td>" . $hasil['id_buku'] . "</td>";
		echo "<td>" . $hasil['judul_buku'] . "</td>";
		echo "<td>" . $hasil['tanggal_pinjam'] . "</td>";
		echo "<td>" . $hasil['jatuh_tempo'] . "</td>";
        echo "<td>" . $hasil['tanggal_kembali'] . "</td>";
		echo "<td>" . $hasil['denda_perhari'] . "</td>";
		echo "<td>" . $hasil['jumlah_hari'] . "</td>";
		echo "<td>" . $hasil['total_denda'] . "</td>";
		echo "<td><a href=edit_data_denda.php?id_denda=$hasil[id_denda]>Edit</a></td>";
		echo "<td><a href=hapus_data_denda.php?id_denda=$hasil[id_denda]>Hapus</a></td>";
		echo "</tr>";
	} 
	echo "</table>";
	mysqli_close($connect);	
?>

</body>
</html>