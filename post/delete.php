<?php
	include '../config/koneksi.php';

	$id 		= $_GET['id'];

	$sql		= "DELETE FROM post WHERE id = '$id'";

	mysqli_query($konek, $sql);
	header('location:index.php');