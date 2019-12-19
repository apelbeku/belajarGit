<?php 
	include '../config/koneksi.php';

	$name		= $_POST['name'];
	$email		= $_POST['email'];
	$pass		= $_POST['password'];
	$id 		= $_POST['id'];



	$data		= "SELECT * FROM users WHERE id = '$id'";
	$result		= mysqli_connect($konek, $sql);
	$row		= mysqli_fetch_row($result);
	$pas 		= $row[3];//result =password daro table User

	if(empty($pass)) {
		$pass 		= $pas;
	}
	else{
		$pass		= $_POST['password'];
	}
	



	$sql		= "UPDATE users SET name='$name', email='$email', password='$pass' WHERE id='$id'";

	mysqli_query($konek, $sql);
	header('location:index.php');
 ?>