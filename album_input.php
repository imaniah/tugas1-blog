<?php

include "app/Photos.php";

$photos = new App\Photos();
$rowPhotos = $photos->tampil()
?>

<h2 align="center">Tambah Album</h2>
<form method="POST" action="album_proses.php">
	<table align="center">
		<tr>
			<td>Nama Album</td>
			<td><input type="text" name="album_nama"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="album_text"></td>
		</tr>
		<tr>
			<td>Photo</td>
			<td>
				<select class="nama" name="photo_id">
				<?php foreach ($rowPhotos as $row ) { ?>
					<option value="<?php echo $row['photo_id'] ?>"><?php echo $row['photo_id'] ?></option>
				<?php } ?>
			</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="Simpan"></td>
		</tr>
	</table>
</form>
<br>
<br>