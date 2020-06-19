<!DOCTYPE html>
<html>
	<head>
		<title>ruangberbagima</title>
		<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
	</head>
	<body>

		<?php
			include_once "app/Controller.php";
			include_once "app/Login.php";
			session_start();
			if(!isset($_SESSION['author_name'])) {
			header("location:login.php");
			}
		?>

		<div class="wrapper">
			<img src="layout/assets/images/headerima.jpg" width="100%">
			<header>
				<h1>IMANIAH'S BLOG</h1>
				<nav>
					<ul>
						<li><a href="index.php" class="current">HOME</a></li>&nbsp;
						<li><a href="index.php?page=category_tampil">KATEGORI</a></li>&nbsp;
						<li><a href="index.php?page=post_tampil">POST</a></li>&nbsp;
						<li><a href="index.php?page=photos_tampil">PHOTOS</a></li>&nbsp;
						<li><a href="index.php?page=album_tampil">ALBUM</a></li>&nbsp;
						<li><a href="index.php?page=logout">LOGOUT</a></li>&nbsp;
					</ul>
				</nav>
			</header>

			<div class="main">
		
				<?php
					if(isset($_GET['page'])) {
						include $_GET['page'] . ".php";
					} else {
						include "main.php";
					}
			
				?>
		
			</div>

			<footer>
				&copy; 2020 ruangberbagima.blogspot.com
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>