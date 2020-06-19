<?php

include_once "app/Controller.php";
include_once "app/Category.php";

$cat = new App\Category();

if ($_POST['btn-simpan']) {
	$cat->input();
	header("location:index.php?page=category_tampil");
}

if ($_POST['btn-edit']) {
	$cat->update();
	header("location:index.php?page=category_tampil");
}

if ($_GET['delete-id']) {
	$cat->delete($_GET['delete-id']);
	header("location:index.php?page=category_tampil");
}