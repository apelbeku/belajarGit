<?php
	include '../koneksi.php';

	$author		= $_POST['author'];
	$title		= $_POST['title'];
	$content	= $_POST['content'];
	$status		= $_POST['status'];

	$sql		= "INSERT INTO post (author, title, content, status) VALUES ('$author', '$title', '$content', '$status')";

	mysqli_query($konek, $sql);
	header('location:berandapost.php');