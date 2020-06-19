<h2 align="center">DAFTAR POST</h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button><a href="index.php?page=post_input" style="color: black;">Tambah</a></button>

<?php

require_once "app/Post.php";
$post = new App\Post();
$rows = $post->tampil();

?>

<table align="center">
	<tr align="center" style="background-color: #EEE8AA">
		<td>No</td>
		<td>Date</td>
		<td>Slug</td>
		<td>Title</td>
		<td>Text</td>
		<td>Nama Kategori</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['post_id']; ?></td>
		<td><?php echo $row['post_date']; ?></td>
		<td><?php echo $row['post_slug']; ?></td>
		<td><?php echo $row['post_title']; ?></td>
		<td><?php echo $row['post_text']; ?></td>
		<td><?php echo $row['cat_name']; ?></td>
		<td><a href="index.php?page=post_edit&id=<?php echo $row['post_id']; ?>">Edit</a></td>
		<td><a href="index.php?page=post_proses&delete-id=<?php echo $row['post_id']; ?>">Delete</a></td>
	</tr>
		
	<?php } ?>
</table>
<br>
<br>
<br>
<br>