<h2 align="center">DAFTAR KATEGORI</h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button><a href="index.php?page=category_input"style="color: black;">Tambah</a></button>

<?php

require_once "app/Category.php";

$cat = new App\Category();
$rows = $cat->tampil();

?>

<table align="center">
	<tr align="center" style="background-color: #EEE8AA">
		<td>No</td>
		<td>Nama Kategori</td>
		<td>Text</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['cat_id']; ?></td>
		<td><?php echo $row['cat_name']; ?></td>
		<td><?php echo $row['cat_text']; ?></td>
		<td><a href="index.php?page=category_edit&id=<?php echo $row['cat_id']; ?>">Edit</a></td>
		<td><a href="index.php?page=category_proses&delete-id=<?php echo $row['cat_id']; ?>">Delete</a></td>
	</tr>
		
	<?php } ?>
</table>
<br>
<br>
<br>
<br>