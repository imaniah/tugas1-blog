<h2 align="center">DAFTAR ALBUM</h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button><a href="index.php?page=album_input"style="color: black;">Tambah</a></button>

<?php

require_once "app/Album.php";

$album = new App\Album();
$rows = $album->tampil();

?>

<table align="center">
	<tr align="center" style="background-color: #EEE8AA">
		<td>No</td>
		<td>Nama Album</td>
		<td>Text</td>
		<td>Title Photo</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['album_id']; ?></td>
		<td><?php echo $row['album_nama']; ?></td>
		<td><?php echo $row['album_text']; ?></td>
		<td><?php echo $row['photo_title']; ?></td>
		<td><a href="index.php?page=album_edit&id=<?php echo $row['album_id']; ?>">Edit</a></td>
		<td><a href="index.php?page=album_proses&delete-id=<?php echo $row['album_id']; ?>">Delete</a></td>
	</tr>
		
	<?php } ?>
</table>

<br>
<br>
<br>
<br>
