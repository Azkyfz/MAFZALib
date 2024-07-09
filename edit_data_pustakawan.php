<?php
include "utama.php";
$nip=$_GET['nip'];
$query=mysqli_query($connect,"select nip,nama,jabatan,kewarganegaraan,jenis_kelamin,agama from pustakawan WHERE nip='$nip'");
?>
<form action=update_data_pustakawan.php method=POST>
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
                <td>ID Pustakawan</td>
                <td><input type=text name=nip value="<?php echo $row['nip']; ?>" /></td>
            </tr>
            <tr>
                <td>Nama Pustakawan</td>
                <td><input type=text name=nama value="<?php echo $row['nama']; ?>" /></td>
            </tr>
            <tr>
                <td>Status Jabatan</td>
                <td><input type="radio" <?php if($row['jabatan']=="Kepala Perpustakaan"){ echo "checked"; } ?> name="jabatan" value="Kepala Perpustakaan">Kepala Perpustakaan
					<input type="radio" <?php if($row['jabatan']=="Asisten Kepala"){ echo "checked"; } ?> name="jabatan" value="Asisten Kepala">Asisten Kepala
                    <input type="radio" <?php if($row['jabatan']=="Pustakawan Tetap"){ echo "checked"; } ?> name="jabatan" value="Pustakawan Tetap">Pustakawan Tetap
                    <input type="radio" <?php if($row['jabatan']=="Pustakawan Magang"){ echo "checked"; } ?> name="jabatan" value="Pustakawan Magang">Pustakawan Magang
				</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td><input type=text name=kewarganegaraan value="<?php echo $row['kewarganegaraan']; ?>" /></td>
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
