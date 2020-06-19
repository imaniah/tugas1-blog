<?php

include "app/Album.php";
$id = $_GET['id'];
$album = new App\Album();
$row = $album->edit($id);

include "app/Photos.php";
$photos = new App\Photos();
$rowPhotos = $photos->tampil();
?>

<h2>Edit Album</h2>
<form method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>Nama Album</td>
			<td><input type="text" name="album_nama" value="<?php echo $row['album_nama']; ?>"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="album_text" value="<?php echo $row['album_text']; ?>"></td>
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
			<td><input type="submit" name="btn-edit" value="Update"></td>
		</tr>
	</table>
</form>