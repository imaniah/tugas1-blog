<?php

$id = $_GET['id'];
include "app/Post.php";
$post = new App\Post();
$row = $post->edit($id);

include "app/Category.php";
$cat = new App\Category();
$rowCategory = $cat->tampil();
?>

<h2>Edit Post</h2>
<form method="POST" action="post_proses.php">
	<input type="hidden" name="post_id" value="<?php echo $id; ?>">
	<table>
		<tr>
			<td>Date</td>
			<td><input type="date" name="post_date" value="<?php echo $row['post_date']; ?>"></td>
		</tr>
		<tr>
			<td>Slug</td>
			<td><input type="text" name="post_slug" value="<?php echo $row['post_slug']; ?>"></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="post_title" value="<?php echo $row['post_title']; ?>"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="post_text" value="<?php echo $row['post_text']; ?>"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>
			<select class="nama" name="cat_id">
				<?php foreach ($rowCategory as $row ) { ?>
					<option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_id'] ?></option>
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