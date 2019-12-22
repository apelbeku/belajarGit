<?php
	session_start();
	session_destroy();
	header('location: http://localhost/main/php/belajarGit/index.php');