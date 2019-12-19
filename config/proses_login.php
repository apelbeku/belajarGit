<?php 
	session_start();
	include 'koneksi.php';

	$email		= $_POST['email'];
	$pass		= md5($_POST['password']);

	$sql		= "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
	$result		= mysqli_query($konek, $sql);
	$row		= mysqli_fetch_assoc($result);

	if (!empty($email) && !empty($pass)) {
		if ($row) {
			$_SESSION['email']		= $email;
			$_SESSION['id']			= $row['id'];
			$_SESSION['name']		= $row['name'];
			$_SESSION['password']	= $row['pass'];
			header('location:../home/index.php')
		}else{
			echo "Email atau password anda Salah :p";
		}
	}