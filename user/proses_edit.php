<?php 
	include '../koneksi.php';

	$name		= $_POST['name'];
	$email		= $_POST['email'];
	$pass		= $_POST['password'];
	$id 		= $_POST['id'];



	$sql		= "UPDATE users SET name='$name', email='$email', password='$pass' WHERE id='$id'";

	mysqli_query($konek, $sql);
	header('location:index.php');
 ?>