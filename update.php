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

		if (!empty($_POST['jenis_kelamin'])) {
			$jenis_kelamin = $_POST['jenis_kelamin'];
		} else {
			$jenis_kelamin = '';
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

		if (!empty($_POST['asal_daerah'])) {
			$asal_daerah = $_POST['asal_daerah'];
		} else {
			$asal_daerah = '';
		}

		if (!empty($_POST['skill'])) {
			$skill = $_POST['skill'];
		} else {
			$skill = '';
		}

		if (!empty($_POST['nama_ayah'])) {
			$nama_ayah = $_POST['nama_ayah'];
		} else {
			$nama_ayah = '';
		}

		if (!empty($_POST['alamat_ayah'])) {
			$alamat_ayah = $_POST['alamat_ayah'];
		} else {
			$alamat_ayah = '';
		}

		if (!empty($_POST['pekerjaan_ayah'])) {
			$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
		} else {
			$pekerjaan_ayah = '';
		}

		if (!empty($_POST['penghasilan_ayah'])) {
			$penghasilan_ayah = $_POST['penghasilan_ayah'];
		} else {
			$penghasilan_ayah = '';
		}

		if (!empty($_POST['no_hp_ayah'])) {
			$no_hp_ayah = $_POST['no_hp_ayah'];
		} else {
			$no_hp_ayah = '';
		}

		if (!empty($_POST['nama_ibu'])) {
			$nama_ibu = $_POST['nama_ibu'];
		} else {
			$nama_ibu = '';
		}

		if (!empty($_POST['alamat_ibu'])) {
			$alamat_ibu = $_POST['alamat_ibu'];
		} else {
			$alamat_ibu = '';
		}

		if (!empty($_POST['pekerjaan_ibu'])) {
			$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
		} else {
			$pekerjaan_ibu = '';
		}

		if (!empty($_POST['penghasilan_ibu'])) {
			$penghasilan_ibu = $_POST['penghasilan_ibu'];
		} else {
			$penghasilan_ibu = '';
		}

		if (!empty($_POST['no_hp_ibu'])) {
			$no_hp_ibu = $_POST['no_hp_ibu'];
		} else {
			$no_hp_ibu = '';
		}

		if (!empty($_POST['anak_ke']) && !empty($_POST['saudara'])) {
			$anak_ke = array($_POST['anak_ke'], $_POST['saudara']);
			$anak_ke = implode(',', $anak_ke);
		} else {
			$anak_ke = '';
		}

		if (!empty($_POST['jumlah_tanggungan'])) {
			$jumlah_tanggungan = $_POST['jumlah_tanggungan'];
		} else {
			$jumlah_tanggungan = '';
		}

		if (!empty($_POST['no_hp'])) {
			$no_hp = $_POST['no_hp'];
		} else {
			$no_hp = '';
		}

		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
		} else {
			$email = '';
		}

		if (!empty($_POST['facebook'])) {
			$facebook = $_POST['facebook'];
		} else {
			$facebook = '';
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

		if (isset($_POST['riwayat_organisasi'])) {
			$riwayat_organisasi = $_POST['riwayat_organisasi'];
			$riwayat_organisasi = implode(",", $riwayat_organisasi);
		} else {
			$riwayat_organisasi = array();
			$riwayat_organisasi = implode(",", $riwayat_organisasi);
		}		

		if (isset($_POST['jabatan_organisasi'])) {
			$jabatan_organisasi = $_POST['jabatan_organisasi'];
			$jabatan_organisasi = implode(",", $jabatan_organisasi);
		} else {
			$jabatan_organisasi = array();
			$jabatan_organisasi = implode(",", $jabatan_organisasi);
		}

		if (isset($_POST['tahun_organisasi'])) {
			$tahun_organisasi = $_POST['tahun_organisasi'];
			$tahun_organisasi = implode(",", $tahun_organisasi);
		} else {
			$tahun_organisasi = array();
			$tahun_organisasi = implode(",", $tahun_organisasi);
		}

		if (isset($_POST['isu'])) {
			$isu = $_POST['isu'];
		} else {
			header("Location: edit2.php");
			exit;
		}

		$sql = sprintf("UPDATE maba SET nim='%s', password='%s', nama='%s', fakultas='%s', jurusan='%s', ukt='%s', agama='%s', tempat_lahir='%s', tanggal_lahir='%s', alamat_asal='%s', alamat_sekarang='%s', no_hp='%s', facebook='%s', riwayat_pendidikan='%s', tahun_pendidikan='%s', riwayat_prestasi='%s', tahun_prestasi='%s', pemberi_prestasi='%s', isu='%s', asal_daerah='%s', skill='%s', nama_ayah='%s', alamat_ayah='%s', pekerjaan_ayah='%s', penghasilan_ayah='%s', no_hp_ayah='%s', nama_ibu='%s', alamat_ibu='%s', pekerjaan_ibu='%s', penghasilan_ibu='%s', no_hp_ibu='%s', anak_ke='%s', jumlah_tanggungan='%s', email='%s', riwayat_organisasi='%s', tahun_organisasi='%s', jabatan_organisasi='%s', jenis_kelamin='%s' WHERE nim='%s'", mysqli_real_escape_string($connection, $nim), mysqli_real_escape_string($connection, $password), mysqli_real_escape_string($connection, $nama), mysqli_real_escape_string($connection, $fakultas), mysqli_real_escape_string($connection, $jurusan), mysqli_real_escape_string($connection, $ukt), mysqli_real_escape_string($connection, $agama), mysqli_real_escape_string($connection, $tempat_lahir), mysqli_real_escape_string($connection, $tanggal_lahir), mysqli_real_escape_string($connection, $alamat_asal), mysqli_real_escape_string($connection, $alamat_sekarang), mysqli_real_escape_string($connection, $no_hp), mysqli_real_escape_string($connection, $facebook), mysqli_real_escape_string($connection, $riwayat_pendidikan), mysqli_real_escape_string($connection, $tahun_pendidikan), mysqli_real_escape_string($connection, $riwayat_prestasi), mysqli_real_escape_string($connection, $tahun_prestasi), mysqli_real_escape_string($connection, $pemberi_prestasi), mysqli_real_escape_string($connection, $isu), mysqli_real_escape_string($connection, $asal_daerah), mysqli_real_escape_string($connection, $skill), mysqli_real_escape_string($connection, $nama_ayah), mysqli_real_escape_string($connection, $alamat_ayah), mysqli_real_escape_string($connection, $pekerjaan_ayah), mysqli_real_escape_string($connection, $penghasilan_ayah), mysqli_real_escape_string($connection, $no_hp_ayah), mysqli_real_escape_string($connection, $nama_ibu), mysqli_real_escape_string($connection, $alamat_ibu), mysqli_real_escape_string($connection, $pekerjaan_ibu), mysqli_real_escape_string($connection, $penghasilan_ibu), mysqli_real_escape_string($connection, $no_hp_ibu), mysqli_real_escape_string($connection, $anak_ke), mysqli_real_escape_string($connection, $jumlah_tanggungan), mysqli_real_escape_string($connection, $email), mysqli_real_escape_string($connection, $riwayat_organisasi), mysqli_real_escape_string($connection, $tahun_organisasi), mysqli_real_escape_string($connection, $jabatan_organisasi), mysqli_real_escape_string($connection, $jenis_kelamin), mysqli_real_escape_string($connection, $_SESSION['nim']));
		mysqli_query($connection, $sql) or die(mysql_error());

		$_SESSION['status'] = "Success";
	}

	header("Location: edit2.php");

?>