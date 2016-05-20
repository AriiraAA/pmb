<?php
	session_start(); 
	require_once "connect.php";

	if (!isset($_POST['update'])) {
		header("Location: edit2.php");
		$_SESSION['status'] = "Failed";
		exit;
	}

	if (isset($_SESSION['nim'])) {
		if (!empty($_POST['nim'])) {
			$nim = $_POST['nim'];
		} else {
			$nim = '';
		}

		if (!empty($_POST['password'])) {
			$password = $_POST['password'];
		} else {
			$password = '';
		}

		if (!empty($_POST['nama'])) {
			$nama = $_POST['nama'];
		} else {
			$nama = '';
		}

		if (!empty($_POST['fakultas'])) {
			$fakultas = $_POST['fakultas'];
		} else {
			$fakultas = '';
		}

		if (!empty($_POST['jurusan'])) {
			$jurusan = $_POST['jurusan'];
		} else {
			$jurusan = '';
		}

		if (!empty($_POST['ukt'])) {
			$ukt = $_POST['ukt'];
		} else {
			$ukt = '';
		}

		if (!empty($_POST['agama'])) {
			$agama = $_POST['agama'];
		} else {
			$agama = '';
		}

		if (!empty($_POST['golongan_darah'])) {
			$golongan_darah = $_POST['golongan_darah'];
		} else {
			$golongan_darah = '';
		}

		if (!empty($_POST['tempat_lahir'])) {
			$tempat_lahir = $_POST['tempat_lahir'];
		} else {
			$tempat_lahir = '';
		}

		if (!empty($_POST['tanggal_lahir'])) {
			$tanggal_lahir = $_POST['tanggal_lahir'];
		} else {
			$tanggal_lahir = '';
		}

		if (!empty($_POST['alamat_asal'])) {
			$alamat_asal = $_POST['alamat_asal'];
		} else {
			$alamat_asal = '';
		}

		if (!empty($_POST['alamat_sekarang'])) {
			$alamat_sekarang = $_POST['alamat_sekarang'];
		} else {
			$alamat_sekarang = '';
		}

		if (!empty($_POST['no_hp'])) {
			$no_hp = $_POST['no_hp'];
		} else {
			$no_hp = '';
		}

		if (!empty($_POST['facebook'])) {
			$facebook = $_POST['facebook'];
		} else {
			$facebook = '';
		}

		if (!empty($_POST['twitter'])) {
			$twitter = $_POST['twitter'];
		} else {
			$twitter = '';
		}

		if (!empty($_POST['id_line'])) {
			$id_line = $_POST['id_line'];
		} else {
			$id_line = '';
		}

		if (!empty($_POST['instagram'])) {
			$instagram = $_POST['instagram'];
		} else {
			$instagram = '';
		}

		if (!empty($_POST['pin_bbm'])) {
			$pin_bbm = $_POST['pin_bbm'];
		} else {
			$pin_bbm = '';
		}

		if (isset($_POST['riwayat_pendidikan'])) {
			$riwayat_pendidikan = $_POST['riwayat_pendidikan'];
			$riwayat_pendidikan = implode(",", $riwayat_pendidikan);
		} else {
			$riwayat_pendidikan = array();
			$riwayat_pendidikan = implode(",", $riwayat_pendidikan);
		}

		if (isset($_POST['tahun_pendidikan'])) {
			$tahun_pendidikan = $_POST['tahun_pendidikan'];
			$tahun_pendidikan = implode(",", $tahun_pendidikan);
		} else {
			$tahun_pendidikan = array();
			$tahun_pendidikan = implode(",", $tahun_pendidikan);
		}

		if (isset($_POST['riwayat_prestasi'])) {
			$riwayat_prestasi = $_POST['riwayat_prestasi'];
			$riwayat_prestasi = implode(",", $riwayat_prestasi);
		} else {
			$riwayat_prestasi = array();
			$riwayat_prestasi = implode(",", $riwayat_prestasi);
		}		

		if (isset($_POST['pemberi_prestasi'])) {
			$pemberi_prestasi = $_POST['pemberi_prestasi'];
			$pemberi_prestasi = implode(",", $pemberi_prestasi);
		} else {
			$pemberi_prestasi = array();
			$pemberi_prestasi = implode(",", $pemberi_prestasi);
		}

		if (isset($_POST['tahun_prestasi'])) {
			$tahun_prestasi = $_POST['tahun_prestasi'];
			$tahun_prestasi = implode(",", $tahun_prestasi);
		} else {
			$tahun_prestasi = array();
			$tahun_prestasi = implode(",", $tahun_prestasi);
		}

		if (isset($_POST['isu'])) {
			$isu = $_POST['isu'];
		} else {
			header("Location: edit2.php");
			exit;
		}

		$sql = sprintf("UPDATE maba SET nim='%s', password='%s', nama='%s', fakultas='%s', jurusan='%s', ukt='%s', agama='%s', golongan_darah='%s', tempat_lahir='%s', tanggal_lahir='%s', alamat_asal='%s', alamat_sekarang='%s', no_hp='%s', facebook='%s', twitter='%s', id_line='%s', instagram='%s', pin_bbm='%s', riwayat_pendidikan='%s', tahun_pendidikan='%s', riwayat_prestasi='%s', tahun_prestasi='%s', pemberi_prestasi='%s', isu='%s' WHERE nim='%s'", mysqli_real_escape_string($connection, $nim), mysqli_real_escape_string($connection, $password), mysqli_real_escape_string($connection, $nama), mysqli_real_escape_string($connection, $fakultas), mysqli_real_escape_string($connection, $jurusan), mysqli_real_escape_string($connection, $ukt), mysqli_real_escape_string($connection, $agama), mysqli_real_escape_string($connection, $golongan_darah), mysqli_real_escape_string($connection, $tempat_lahir), mysqli_real_escape_string($connection, $tanggal_lahir), mysqli_real_escape_string($connection, $alamat_asal), mysqli_real_escape_string($connection, $alamat_sekarang), mysqli_real_escape_string($connection, $no_hp), mysqli_real_escape_string($connection, $facebook), mysqli_real_escape_string($connection, $twitter), mysqli_real_escape_string($connection, $id_line),  mysqli_real_escape_string($connection, $instagram), mysqli_real_escape_string($connection, $pin_bbm), mysqli_real_escape_string($connection, $riwayat_pendidikan), mysqli_real_escape_string($connection, $tahun_pendidikan), mysqli_real_escape_string($connection, $riwayat_prestasi), mysqli_real_escape_string($connection, $tahun_prestasi), mysqli_real_escape_string($connection, $pemberi_prestasi), mysqli_real_escape_string($connection, $isu), mysqli_real_escape_string($connection, $_SESSION['nim']));
		mysqli_query($connection, $sql);

		$_SESSION['status'] = "Success";
	}

	header("Location: edit2.php");

?>