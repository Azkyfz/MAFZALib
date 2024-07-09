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
<BR>Laporan Data Pengembalian<BR>
<?php
	Include "utama.php";
	$ambil="select id_peminjaman,id_buku,judul_buku,tanggal_kembali from pengembalian limit 0,20";
	$lakukan=mysqli_query($connect,$ambil);
	echo "<table border='1'>
		<tr>
				<th>ID Peminjaman</th>
				<th>ID Buku</th>
				<th>Judul Buku</th>
				<th>Tanggal Kembali</th>
				<th colspan='2'> Aksi</th>
		</tr>";
	while($hasil=mysqli_fetch_array($lakukan))
	{
		echo "<tr>";
		echo "<td>" . $hasil['id_peminjaman'] . "</td>";
		echo "<td>" . $hasil['id_buku'] . "</td>";
		echo "<td>" . $hasil['judul_buku'] . "</td>";
		echo "<td>" . $hasil['tanggal_kembali'] . "</td>";
		echo "<td><a href=edit_data_pengembalian.php?id_peminjaman=$hasil[id_peminjaman]>Edit</a></td>";
		echo "<td><a href=hapus_data_pengembalian.php?id_peminjaman=$hasil[id_peminjaman]>Hapus</a></td>";
		echo "</tr>";
	} 
	echo "</table>";
	mysqli_close($connect);
?>

</body>
</html>

