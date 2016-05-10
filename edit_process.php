<?php 
	session_start();
	require_once "connect.php";

	$nim = $_POST["nim"];

	if (isset($_POST['edit'])) {
		//$allowed_exts	= array("jpg", "jpeg", "png");
		//$ext 			= strtolower(substr($_FILES["foto"]["name"], strrpos($_FILES["foto"]["name"], '.') + 1));
		//if (in_array($ext, $allowed_exts)) {
			$nama 				= $_POST["nama"];
			$fakultas			= $_POST["fakultas"];
			$jurusan			= $_POST["jurusan"];
			$tempat_lahir		= $_POST["tempat_lahir"];
			$tanggal_lahir		= $_POST["tanggal_lahir"];
			$alamat_asal		= $_POST["alamat_asal"];
			$alamat_sekarang	= $_POST["alamat_sekarang"];
			$agama				= $_POST["agama"];
			$ukt				= $_POST["ukt"];
			$golongan_darah		= $_POST["golongan_darah"];
			$no_hp				= $_POST["no_hp"];
			$facebook			= $_POST["facebook"];
			$twitter			= $_POST["twitter"];
			$id_line			= $_POST["id_line"];
			$instagram			= $_POST["instagram"];
			$pin_bbm			= $_POST["pin_bbm"];

			/*
			$pendidikan_sekolah	= implode(',', $_POST["pendidikan_sekolah"]);
			$pendidikan_tahun	= implode(',', $_POST["pendidikan_tahun"]);
			$prestasi			= implode(',', $_POST["prestasi"]);
			$instansi			= implode(',', $_POST["instansi"]);
			$tahun				= implode(',', $_POST["tahun"]);
			*/

			$password 			= '';

			$sql				= sprintf("UPDATE maba SET nama='%s', fakultas='%s', jurusan='%s', tempat_lahir='%s', tanggal_lahir='%s', alamat_asal='%s', alamat_sekarang='%s', agama='%s', ukt='%s', golongan_darah='%s', no_hp='%s', facebook='%s', twitter='%s', id_line='%s', instagram='%s', pin_bbm='%s' WHERE nim='%s'", mysqli_real_escape_string($connection, $nama), mysqli_real_escape_string($connection, $fakultas), mysqli_real_escape_string($connection, $jurusan), mysqli_real_escape_string($connection, $tempat_lahir), mysqli_real_escape_string($connection, $tanggal_lahir), mysqli_real_escape_string($connection, $alamat_asal), mysqli_real_escape_string($connection, $alamat_sekarang), mysqli_real_escape_string($connection, $agama), mysqli_real_escape_string($connection, $ukt), mysqli_real_escape_string($connection, $golongan_darah), mysqli_real_escape_string($connection, $no_hp), mysqli_real_escape_string($connection, $facebook), mysqli_real_escape_string($connection, $twitter), mysqli_real_escape_string($connection, $id_line), mysqli_real_escape_string($connection, $instagram), mysqli_real_escape_string($connection, $pin_bbm), mysqli_real_escape_string($connection, $nim));
			mysqli_query($connection, $sql);

			//move_uploaded_file($_FILES["foto"]["tmp_name"], "foto/". $nim . ".png");

			$_SESSION["status"] = "Success";
		//} else {
		//	$_SESSION["status"] = "Forbidden";
		//}
	} else {
		$_SESSION["status"] = "Failed";
	}

	header("Location: edit.php?nim=".$nim);
?>

