<?php  
	session_start();
	if (isset($_SESSION['nim'], $_SESSION['nama'], $_SESSION['role'])) {
		session_destroy();
	}
	header("Location: login.php");
	exit;
?>