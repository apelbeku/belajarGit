<?php 
	$server		= "localhost";
	$usr		= "root";
	$pass		= "1234";
	$dbname		= "phpsql";

	$konek		mysql_connect($server, $usr, $pass, $dbname);

	 if(!konek) {
	 	die(mysqli_connect_error("koneksi gagal!"));
	 }
 ?>