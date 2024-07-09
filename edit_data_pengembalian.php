<?php
include "utama.php";
$id_peminjaman=$_GET['id_peminjaman'];
$query=mysqli_query($connect,"select id_peminjaman,id_buku,judul_buku,tanggal_kembali from pengembalian WHERE id_peminjaman='$id_peminjaman'");
?>
<form action=update_data_pengembalian.php method=POST>
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
    <table border="0">
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type=text name=id_peminjaman value="<?php echo $row['id_peminjaman']; ?>" /></td>
            </tr>
            <tr>
                <td>ID Buku</td>
                <td><input type=text name=id_buku value="<?php echo $row['id_buku']; ?>" /></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type=text name=judul_buku value="<?php echo $row['judul_buku']; ?>" /></td>
            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td><input type=date name=tanggal_kembali value="<?php echo $row['tanggal_kembali']; ?>" /></td>
            </tr>
            <tr>
                <td style="text-align: left;"><input type=submit value=Update class="btn btn-primary" name=submit /><style="text-align: left;"><input type=reset value=Batal class="btn btn-primary" name=reset /></td></td>
            </tr>
        <?php
        }
        ?>

    </table>

</form>
</body>
</html>
