<?php

include_once "app/Controller.php";
include_once "app/Post.php";

$post = new App\Post();

if ($_POST['btn-simpan']) {
	$post->input();
	header("location:index.php?page=post_tampil");
}

if ($_POST['btn-edit']) {
	$post->update();
	header("location:index.php?page=post_tampil");
}

if ($_GET['delete-id']) {
	$post->delete($_GET['delete-id']);
	header("location:index.php?page=post_tampil");
}