<?php
include "app/Category.php";
$id = $_GET['id'];

$cat = new App\Category();
$row = $cat->edit($id);
?>
<h2>Edit Kategori</h2>
<form method="POST" action="category_proses.php">
	<input type="hidden" name="cat_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>Nama Kategori</td>
			<td><input type="text" name="cat_name" value="<?php echo $row['cat_name']; ?>"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="cat_text" value="<?php echo $row['cat_text']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="Update"></td>
		</tr>
	</table>
</form>