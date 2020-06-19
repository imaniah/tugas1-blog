<?php

include_once "app/Controller.php";
include_once "app/Photos.php";

$photos = new App\Photos();

if ($_POST['btn-simpan']) {
	$photos->input();
	header("location:index.php?page=photos_tampil");
}

if ($_POST['btn-edit']) {
	$photos->update();
	header("location:index.php?page=photos_tampil");
}

if ($_GET['delete-id']) {
	$photos->delete($_GET['delete-id']);
	header("location:index.php?page=photos_tampil");
}