<?php
include "utama.php";
$id_denda=$_GET['id_denda'];
$query=mysqli_query($connect,"select id_denda,id_buku,judul_buku,tanggal_pinjam,jatuh_tempo,tanggal_kembali,denda_perhari,jumlah_hari,total_denda from denda WHERE id_denda='$id_denda'");
?>
<form action=update_data_denda.php method=POST>
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
                <td>ID Denda</td>
                <td><input type=text name=id_denda value="<?php echo $row['id_denda']; ?>" /></td>
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
                <td>Tanggal Pinjam</td>
                <td><input type=date name=tanggal_pinjam value="<?php echo $row['tanggal_pinjam']; ?>" /></td>
            </tr>
            <tr>
                <td>Jatuh Tempo</td>
                <td><input type=date name=jatuh_tempo value="<?php echo $row['jatuh_tempo']; ?>" /></td>
            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td><input type=date name=tanggal_kembali value="<?php echo $row['tanggal_kembali']; ?>" /></td>
            </tr>
            <tr>
                <td>Denda Perhari</td>
                <td><input type=text name=denda_perhari value="<?php echo $row['denda_perhari']; ?>" /></td>
            </tr>
            <tr>
                <td>Jumlah Hari</td>
                <td><input type=text name=jumlah_hari value="<?php echo $row['jumlah_hari']; ?>" /></td>
            </tr>
            <tr>
                <td>Total Denda</td>
                <td><input type=text name=total_denda value="<?php echo $row['total_denda']; ?>" /></td>
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
