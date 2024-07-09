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
------------
<br><a href="area_pemustaka.html">Area Pemustaka</a>
<?php
	Include "utama.php";
	$ambil="select diskusi_pemustaka,kritik_perpustakaan,saran_perpustakaan from area_2 limit 0,20";
	$lakukan=mysqli_query($connect,$ambil);
	echo "<table border='1'>
		<tr>
				<th>Diskusi Pemustaka</th>
				<th>Kritik Perpustakaan</th>
				<th>Saran Perpustakaan</th>
		</tr>";
	while($hasil=mysqli_fetch_array($lakukan))
	{
		echo "<tr>";
		echo "<td>" . $hasil['diskusi_pemustaka'] . "</td>";
		echo "<td>" . $hasil['kritik_perpustakaan'] . "</td>";
		echo "<td>" . $hasil['saran_perpustakaan'] . "</td>";
		echo "</tr>";
	} 
	echo "</table>";
	mysqli_close($connect);
?>
</body>
</html>

