<?php 
	session_start(); 
	require_once "connect.php";
	if (!isset($_SESSION['nim']) || !isset($_SESSION['nama']) || !isset($_SESSION['role'])) {
		header("Location: login_admin.php");
		exit;
	} else {
		$nim	= $_SESSION['nim'];
		$nama	= $_SESSION['nama'];
		$role	= $_SESSION['role'];
	}

	if ($_SESSION['role'] != "Super Admin") {
		header("Location: admin.php");
		exit;
	}

	if (!isset($_GET['admin_nim'])) {
		header("Location: admin.php");
		exit;
	}
	echo mysqli_real_escape_string($_GET['admin_nim']);
	exit;
	mysqli_query($connection, "DELETE FROM admin WHERE nim='".mysqli_real_escape_string($_GET['admin_nim'])."'");
	header("Location: admin_list.php");
?>