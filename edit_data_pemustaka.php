<?php
include "utama.php";
$id_pemustaka=$_GET['id_pemustaka'];
$query=mysqli_query($connect,"select id_pemustaka,nama,status_pemustaka,kewarganegaraan,pekerjaan,jenis_kelamin,agama from pemustaka WHERE id_pemustaka='$id_pemustaka'");
?>
<form action=update_data_pemustaka.php method=POST>
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
                <td>ID Anggota</td>
                <td><input type=text name=id_pemustaka value="<?php echo $row['id_pemustaka']; ?>" /></td>
            </tr>
            <tr>
                <td>Nama Anggota</td>
                <td><input type=text name=nama value="<?php echo $row['nama']; ?>" /></td>
            </tr>
            <tr>
                <td>Status Pemustaka</td>
                <td><input type="radio" <?php if($row['status_pemustaka']=="Tetap"){ echo "checked"; } ?> name="status_pemustaka" value="Tetap">Tetap
					<input type="radio" <?php if($row['status_pemustaka']=="Tamu"){ echo "checked"; } ?> name="status_pemustaka" value="Tamu">Tamu
				</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td><input type=text name=kewarganegaraan value="<?php echo $row['kewarganegaraan']; ?>" /></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type=text name=pekerjaan value="<?php echo $row['pekerjaan']; ?>" /></td>
            </tr>
            <tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" <?php if($row['jenis_kelamin']=="Laki-laki"){ echo "checked"; } ?> name="jenis_kelamin" value="Laki-laki">Laki-laki
					<input type="radio" <?php if($row['jenis_kelamin']=="Perempuan"){ echo "checked"; } ?> name="jenis_kelamin" value="Perempuan">Perempuan
				</td>
			<tr>
				<td>Agama		:	<select name=agama value="<?php echo $row['agama']?>">
							<option value=Islam> Islam</option>
							<option value=Kristen> Kristen</option>
							<option value=Katholik> Katholik</option>
							<option value=Hindu> Hindu</option>
							<option value=Buddha> Buddha</option>
							<option value=Konghucu> Konghucu</option>
                            <option value=Lainnya> Lainnya</option>
						</select>
				</td>
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
