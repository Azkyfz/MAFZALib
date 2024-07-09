<?php
include "utama.php";
$id_buku=$_GET['id_buku'];
$query=mysqli_query($connect,"select id_buku,judul_buku,pengarang,jenis_pengarang,penerbit,tempat_terbit,tahun_terbit,fisik_buku,bahasa,edisi,cetakan,isbn,nomor_klasifikasi,nomor_rak from buku WHERE id_buku='$id_buku'");
?>
<form action=update_data_buku.php method=POST>
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
                <td>ID Buku</td>
                <td><input type=text name=id_buku value="<?php echo $row['id_buku']; ?>" /></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type=text name=judul_buku value="<?php echo $row['judul_buku']; ?>" /></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type=text name=pengarang value="<?php echo $row['pengarang']; ?>" /></td>
            </tr>
            <tr>
                <td>Jenis Pengarang</td>
                <td><input type="radio" <?php if($row['jenis_pengarang']=="Nama Orang"){ echo "checked"; } ?> name="jenis_pengarang" value="Nama Orang">Nama Orang
					<input type="radio" <?php if($row['jenis_pengarang']=="Badan Organisasi"){ echo "checked"; } ?> name="jenis_pengarang" value="Badan Organisasi">Badan Organisasi
                    <input type="radio" <?php if($row['jenis_pengarang']=="Konferensi"){ echo "checked"; } ?> name="jenis_pengarang" value="Konferensi">Konferensi
				</td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type=text name=penerbit value="<?php echo $row['penerbit']; ?>" /></td>
            </tr>
            <tr>
                <td>Tempat Terbit</td>
                <td><input type=text name=tempat_terbit value="<?php echo $row['tempat_terbit']; ?>" /></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type=text name=tahun_terbit value="<?php echo $row['tahun_terbit']; ?>" /></td>
            </tr>
            <tr>
                <td>Fisik Buku</td>
                <td><input type=text name=fisik_buku value="<?php echo $row['fisik_buku']; ?>" /></td>
            </tr>
			<tr>
				<td>Bahasa		:	<select name=bahasa value="<?php echo $row['bahasa']?>">
							<option value=Arab> Arab</option>
							<option value=Indonesia> Indonesia</option>
							<option value=Inggris> Inggris</option>
							<option value=Jawa> Jawa</option>
							<option value=Jepang> Jepang</option>
							<option value=Mandarin> Mandarin</option>
                            <option value=Sunda> Sunda</option>
                            <option value=Lainnya> Lainnya</option>
						</select>
				</td>
			</tr>
            <tr>
                <td>Edisi</td>
                <td><input type=text name=edisi value="<?php echo $row['edisi']; ?>" /></td>
            </tr>
            <tr>
                <td>Cetakan</td>
                <td><input type=text name=cetakan value="<?php echo $row['cetakan']; ?>" /></td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td><input type=text name=isbn value="<?php echo $row['isbn']; ?>" /></td>
            </tr>
            <tr>
                <td>Nomor Klasifikasi</td>
                <td><input type=text name=nomor_klasifikasi value="<?php echo $row['nomor_klasifikasi']; ?>" /></td>
            </tr>
            <tr>
                <td>Nomor Rak</td>
                <td><input type=text name=nomor_rak value="<?php echo $row['nomor_rak']; ?>" /></td>
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
