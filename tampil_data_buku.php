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
<BR>Laporan Data Buku<BR>
<?php
	Include "utama.php";
	$ambil="select id_buku,judul_buku,pengarang,jenis_pengarang,penerbit,tempat_terbit,tahun_terbit,fisik_buku,bahasa,edisi,cetakan,isbn,nomor_klasifikasi,nomor_rak from buku limit 0,20";
	$lakukan=mysqli_query($connect,$ambil);
	echo "<table border='1'>
		<tr>
				<th>ID Buku</th>
				<th>Judul Buku</th>
				<th>Pengarang</th>
				<th>Jenis Pengarang</th>
				<th>Penerbit</th>
				<th>Tempat Terbit</th>
				<th>Tahun Terbit</th>
				<th>Fisik Buku</th>
				<th>Bahasa</th>
				<th>Edisi</th>
				<th>Cetakan</th>
				<th>ISBN</th>
				<th>Nomor Klasifikasi</th>
				<th>Nomor Rak</th>
				<th colspan='2'> Aksi</th>
		</tr>";
	while($hasil=mysqli_fetch_array($lakukan))
	{
		echo "<tr>";
		echo "<td>" . $hasil['id_buku'] . "</td>";
		echo "<td>" . $hasil['judul_buku'] . "</td>";
		echo "<td>" . $hasil['pengarang'] . "</td>";
		echo "<td>" . $hasil['jenis_pengarang'] . "</td>";
		echo "<td>" . $hasil['penerbit'] . "</td>";
		echo "<td>" . $hasil['tempat_terbit'] . "</td>";
		echo "<td>" . $hasil['tahun_terbit'] . "</td>";
		echo "<td>" . $hasil['fisik_buku'] . "</td>";
		echo "<td>" . $hasil['bahasa'] . "</td>";
		echo "<td>" . $hasil['edisi'] . "</td>";
		echo "<td>" . $hasil['cetakan'] . "</td>";
		echo "<td>" . $hasil['isbn'] . "</td>";
		echo "<td>" . $hasil['nomor_klasifikasi'] . "</td>";
		echo "<td>" . $hasil['nomor_rak'] . "</td>";
		echo "<td><a href=edit_data_buku.php?id_buku=$hasil[id_buku]>Edit</a></td>";
		echo "<td><a href=hapus_data_buku.php?id_buku=$hasil[id_buku]>Hapus</a></td>";
		echo "</tr>";
	} 
	echo "</table>";
	mysqli_close($connect);
?>

</body>
</html>