<h2 align="center">DAFTAR PHOTOS</h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button><a href="index.php?page=photos_input"style="color: black;">Tambah</a></button>

<?php


require_once "app/Photos.php";
$photos = new App\Photos();
$rows = $photos->tampil();

?>

<table align="center">
	<tr align="center" style="background-color: #EEE8AA">
		<td>No</td>
		<td>Date</td>
		<td>Title</td>
		<td>Text</td>
		<td>Title Post</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['photo_id']; ?></td>
		<td><?php echo $row['photo_date']; ?></td>
		<td><?php echo $row['photo_title']; ?></td>
		<td><?php echo $row['photo_text']; ?></td>
		<td><?php echo $row['post_title']; ?></td>
		<td><a href="index.php?page=photos_edit&id=<?php echo $row['photo_id']; ?>";>Edit</a></td>
		<td><a href="index.php?page=photos_proses&delete-id=<?php echo $row['photo_id']; ?>">Delete</a></td>
	</tr>
		
	<?php } ?>
</table>
<br>
<br>
<br>
<br>