<?php
	session_start();
	session_destroy();
	header('location: http://localhost/php/belajarGit/index.php');