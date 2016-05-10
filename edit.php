<?php  
	session_start();
	require_once "connect.php";

	if (!isset($_GET['nim']) || !isset($_SESSION['role'])) {
		header("Location: admin.php");
		exit;
	} else {
		if ($_SESSION['role'] == "Super Admin") {
			$sql	= "SELECT * FROM maba WHERE nim='".$_GET['nim']."' LIMIT 1";
		} else {
			$sql	= "SELECT * FROM maba WHERE nim='".$_GET['nim']."' AND fakultas='".$_SESSION['role']."' LIMIT 1";
		}

		$run 	= mysqli_query($connection, $sql);
		while ($row = mysqli_fetch_array($run)) {
			$nim 					= $row['nim'];
			$nama 					= $row['nama'];
			$jurusan				= $row['jurusan'];
			$fakultas				= $row['fakultas'];
			$ukt					= $row['ukt'];
			$agama					= $row['agama'];
			$golongan_darah			= $row['golongan_darah'];
			$tempat_lahir			= $row['tempat_lahir'];
			$tanggal_lahir			= $row['tanggal_lahir'];
			$alamat_asal			= $row['alamat_asal'];
			$alamat_sekarang		= $row['alamat_sekarang'];
			$no_hp					= $row['no_hp'];
			$facebook				= $row['facebook'];
			$twitter				= $row['twitter'];
			$id_line				= $row['id_line'];
			$instagram				= $row['instagram'];
			$pin_bbm				= $row['pin_bbm'];
			$pendidikan_sekolah		= explode(',', $row['riwayat_pendidikan']);
			$pendidikan_tahun		= explode(',', $row['tahun_pendidikan']);
			$prestasi				= explode(',', $row['riwayat_prestasi']);
			$instansi				= explode(',', $row['pemberi_prestasi']);
			$tahun					= explode(',', $row['tahun_prestasi']);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Penerimaan Mahasiswa Baru</title>
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
	<script src="semantic/semantic.min.js"></script>
	<link rel="shortcut icon" href="http://bem.ilkom.unsri.ac.id/wp-content/uploads/2015/04/favicon-1.png">
	<style type="text/css">
	 .required {
	 	color: red;
	 }
	</style>
</head>
<body>
	<div class="ui large top fixed hidden menu">
	  <div class="ui container">
	  	<h3 class="item">BEM KM Fasilkom Unsri</h3>
	    <div class="right menu">
	      	<a class="item" href="http://bem.ilkom.unsri.ac.id">Beranda</a>
		    <a class="item" href="#">Karya Ilkom</a>
		    <a class="item" href="#">Mahasiswa Berprestasi</a>
	    </div>
	  </div>
	</div>
	<center>
		<h1 style="margin-top: 6%">Form Pengisian Data Mahasiswa Baru Universitas Sriwijaya</h1>		
	</center>
	<?php if (isset($_SESSION["status"]) && $_SESSION["status"] === "Success"): ?>
  		<div class="ui form success">
  			<div class="ui success message">
		  		<div class="header">Sukses</div>
		  		<p>Data anda telah dimasukkan</p>
		  	</div>
  		</div>
	<?php elseif (isset($_SESSION["status"]) && $_SESSION["status"] === "Failed"): ?>
		<div class="ui form error">
			<div class="ui error message">
		  		<div class="header">Error</div>
		  		<p>Data anda gagal dimasukkan</p>
		  	</div>
		</div>
	<?php endif; ?>
	  <form style="margin-top: 3%;" id="form-alumni" class="ui form" action="edit_process.php" method="POST" enctype="multipart/form-data">
	  	<div class="ui grid">
	  		<div class="four wide column">
	  			<input type="hidden" name="edit" value="editing" />
	  		</div>
		  	<div class="seven wide column">
		  		<table class="ui definition table">
					<tbody>
						<tr>
							<td colspan="2" style="text-align: center;">
								<img width="240" height="250" src="<?= 'foto/' . $nim . '.png' ?>" />
							</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td>
								<?= $nim ?>
								<input type="hidden" name="nim" id="nim" value="<?= $nim ?>" />
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>
								<div class="field">
						  			<input type="text" name="nama" id="nama" value="<?= $nama ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Jurusan</td>
							<td>
								<div class="field">
						  			<input type="text" name="jurusan" id="jurusan" value="<?= $jurusan ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Fakultas</td>
							<td>
								<select class="ui dropdown" name="fakultas" id="fakultas">
									<?php if ($fakultas == "Kedokteran"): ?>
										<option value="Kedokteran">Kedokteran</option>
										<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
							  			<option value="Teknik">Teknik</option>
							  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
							  			<option value="Pertanian">Pertanian</option>
							  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
							  			<option value="Ilmu Komputer">Ilmu Komputer</option>
							  			<option value="Ekonomi">Ekonomi</option>
							  			<option value="Hukum">Hukum</option>
							  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
									<?php elseif ($fakultas == "Kesehatan Masyarakat"): ?>
										<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
										<option value="Kedokteran">Kedokteran</option>
										<option value="Teknik">Teknik</option>
							  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
							  			<option value="Pertanian">Pertanian</option>
							  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
							  			<option value="Ilmu Komputer">Ilmu Komputer</option>
							  			<option value="Ekonomi">Ekonomi</option>
							  			<option value="Hukum">Hukum</option>
							  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
							  		<?php elseif ($fakultas == "Teknik"): ?>
										<option value="Teknik">Teknik</option>
										<option value="Kedokteran">Kedokteran</option>
						  				<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
										<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
							  			<option value="Pertanian">Pertanian</option>
							  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
							  			<option value="Ilmu Komputer">Ilmu Komputer</option>
							  			<option value="Ekonomi">Ekonomi</option>
							  			<option value="Hukum">Hukum</option>
							  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
							  		<?php elseif ($fakultas == "Matematika dan Ilmu Pengetahuan Alam"): ?>
										<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
										<option value="Kedokteran">Kedokteran</option>
							  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
							  			<option value="Teknik">Teknik</option>
							  			<option value="Pertanian">Pertanian</option>
							  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
							  			<option value="Ilmu Komputer">Ilmu Komputer</option>
							  			<option value="Ekonomi">Ekonomi</option>
							  			<option value="Hukum">Hukum</option>
							  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
							  		<?php elseif ($fakultas == "Pertanian"): ?>
							  			<option value="Pertanian">Pertanian</option>
										<option value="Kedokteran">Kedokteran</option>
							  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
							  			<option value="Teknik">Teknik</option>
							  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
										<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
							  			<option value="Ilmu Komputer">Ilmu Komputer</option>
							  			<option value="Ekonomi">Ekonomi</option>
							  			<option value="Hukum">Hukum</option>
							  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
							  		<?php elseif ($fakultas == "Keguruan dan Ilmu Pendidikan"): ?>
										<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
										<option value="Kedokteran">Kedokteran</option>
							  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
							  			<option value="Teknik">Teknik</option>
							  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
							  			<option value="Pertanian">Pertanian</option>
							  			<option value="Ilmu Komputer">Ilmu Komputer</option>
							  			<option value="Ekonomi">Ekonomi</option>
							  			<option value="Hukum">Hukum</option>
							  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
							  		<?php elseif ($fakultas == "Ilmu Komputer"): ?>
							  			<option value="Ilmu Komputer">Ilmu Komputer</option>
										<option value="Kedokteran">Kedokteran</option>
							  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
							  			<option value="Teknik">Teknik</option>
							  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
							  			<option value="Pertanian">Pertanian</option>
							  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
							  			<option value="Ekonomi">Ekonomi</option>
						  				<option value="Hukum">Hukum</option>
						  				<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
						  			<?php elseif ($fakultas == "Ekonomi"): ?>
						  				<option value="Ekonomi">Ekonomi</option>
						  				<option value="Kedokteran">Kedokteran</option>
							  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
							  			<option value="Teknik">Teknik</option>
							  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
							  			<option value="Pertanian">Pertanian</option>
							  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
							  			<option value="Ilmu Komputer">Ilmu Komputer</option>
							  			<option value="Hukum">Hukum</option>
							  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
							  		<?php elseif ($fakultas == "Hukum"): ?>
							  			<option value="Hukum">Hukum</option>
							  			<option value="Kedokteran">Kedokteran</option>
							  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
							  			<option value="Teknik">Teknik</option>
							  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
							  			<option value="Pertanian">Pertanian</option>
							  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
							  			<option value="Ilmu Komputer">Ilmu Komputer</option>
							  			<option value="Ekonomi">Ekonomi</option>
							  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
							  		<?php elseif ($fakultas == "Ilmu Sosial dan Ilmu Politik"): ?>
							  			<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>
							  			<option value="Hukum">Hukum</option>
							  			<option value="Kedokteran">Kedokteran</option>
							  			<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
							  			<option value="Teknik">Teknik</option>
							  			<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
							  			<option value="Pertanian">Pertanian</option>
							  			<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
							  			<option value="Ilmu Komputer">Ilmu Komputer</option>
							  			<option value="Ekonomi">Ekonomi</option>
									<?php endif; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td>UKT</td>
							<td>
								<div class="field">
						  			<input type="text" name="ukt" id="ukt" value="<?= $ukt ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Agama</td>
							<td>
								<div class="field">
						  			<input type="text" name="agama" id="agama" value="<?= $agama ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Tempat Lahir</td>
							<td>
								<div class="field">
						  			<input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $tempat_lahir ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td>
								<div class="field">
						  			<input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?= $tanggal_lahir ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Alamat Asal</td>
							<td>
								<div class="field">
						  			<input type="text" name="alamat_asal" id="alamat_asal" value="<?= $alamat_asal ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Alamat Sekarang</td>
							<td>
								<div class="field">
						  			<input type="text" name="alamat_sekarang" id="alamat_sekarang" value="<?= $alamat_sekarang ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Golongan Darah</td>
							<td>
								<div class="field">
						  			<input type="text" name="golongan_darah" id="golongan_darah" value="<?= $golongan_darah ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>No HP</td>
							<td>
								<div class="field">
						  			<input type="text" name="no_hp" id="no_hp" value="<?= $no_hp ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Facebook</td>
							<td>
								<div class="field">
						  			<input type="text" name="facebook" id="facebook" value="<?= $facebook ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Twitter</td>
							<td>
								<div class="field">
						  			<input type="text" name="twitter" id="twitter" value="<?= $twitter ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>ID Line</td>
							<td>
								<div class="field">
						  			<input type="text" name="id_line" id="id_line" value="<?= $id_line ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Instagram</td>
							<td>
								<div class="field">
						  			<input type="text" name="instagram" id="instagram" value="<?= $instagram ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>Pin BBM</td>
							<td>
								<div class="field">
						  			<input type="text" name="pin_bbm" id="pin_bbm" value="<?= $pin_bbm ?>" />
						  		</div>
							</td>
						</tr>
					</tbody>
				</table>
				<center>
					<input class="ui positive button" type="submit" value="Simpan Perubahan" />
				</center>	
		  	</div>	
	  </form>
	  

	  <script type="text/javascript">
	  	$("select.dropdown").dropdown();

	  	$("#fakultas").on("change", function() {
  			var fakultas = $("#fakultas").val();

  			if (fakultas === 'Ilmu Komputer') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>' +
  			'<option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>' +
  			'<option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>' +
  			'<option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>' +
  			'<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>' +
  			'<option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>' +
  			'<option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>' +
  			'<option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>' +
  			'<option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>' +
  			'<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>' +
  			'<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>');
  			} else if (fakultas === 'Ekonomi') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Manajemen">Manajemen</option>' +
  			'<option value="Akuntansi">Akuntansi</option>' +
  			'<option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>' +
  			'<option value="Magister Manajemen">Magister Manajemen</option>');
  			} else if (fakultas === 'Pertanian') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Ilmu Tanah">Ilmu Tanah</option>' +
  			'<option value="Teknik Pertanian">Teknik Pertanian</option>' +
  			'<option value="Teknologi Hasil Perikanan">Teknologi Hasil Perikanan</option>' +
  			'<option value="Peternakan">Peternakan</option>' +
  			'<option value="Teknologi Hasil Pertanian">Teknologi Hasil Pertanian</option>' +
  			'<option value="Agroekoteknologi">Agroekoteknologi</option>' +
  			'<option value="Agribisnis">Agribisnis</option>' +
  			'<option value="Budidaya Perairan">Budidaya Perairan</option>');
  			} else if (fakultas === 'Kedokteran') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Teknik Gigi">Teknik Gigi</option>' +
  			'<option value="Kedokteran Gigi">Kedokteran Gigi</option>' +
  			'<option value="Ilmu Kesehatan Masyarakat">Ilmu Kesehatan Masyarakat</option>' +
  			'<option value="Pendidikan Dokter">Pendidikan Dokter</option>' +
  			'<option value="Psikologi">Psikologi</option>');
  			} else if (fakultas === 'Ilmu Sosial dan Ilmu Politik') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>' +
  			'<option value="Sosiologi">Sosiologi</option>' +
  			'<option value="Administrasi Negara">Administrasi Negara</option>');
  			} else if (fakultas === 'Hukum') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Ilmu Hukum">Ilmu Hukum</option>');
  			} else if (fakultas === 'Kesehatan Masyarakat') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Keselamatan dan Kesehatan Kerja">Keselamatan dan Kesehatan Kerja</option>');
  			} else if (fakultas === 'Matematika dan Ilmu Pengetahuan Alam') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Farmasi">Farmasi</option>' +
  			'<option value="Biologi">Biologi</option>' +
  			'<option value="Kimia">Kimia</option>' +
  			'<option value="Matematika">Matematika</option>' +
  			'<option value="Ilmu Kelautan">Ilmu Kelautan</option>' +
  			'<option value="Fisika">Fisika</option>');
  			} else if (fakultas === 'Keguruan dan Ilmu Pendidikan') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Pendidikan Jasmani dan Kesehatan">Pendidikan Jasmani dan Kesehatan</option>' +
  			'<option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>' +
  			'<option value="Pendidikan Fisika">Pendidikan Fisika</option>' +
  			'<option value="Pendidikan Kimia">Pendidikan Kimia</option>' +
  			'<option value="Pendidikan Sejarah">Pendidikan Sejarah</option>' +
  			'<option value="Pendidikan Matematika">Pendidikan Matematika</option>' +
  			'<option value="Pendidikan Teknik Mesin">Pendidikan Teknik Mesin</option>' +
  			'<option value="Pendidikan Anak Usia Dini">Pendidikan Anak Usia Dini</option>' +
  			'<option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>' +
  			'<option value="Bimbingan Konseling">Bimbingan Konseling</option>' +
  			'<option value="Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</option>' +
  			'<option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option>' +
  			'<option value="Pendidikan Bahasa, Sastra, dan Seni">Pendidikan Bahasa, Sastra, dan Seni</option>' +
  			'<option value="Pendidikan Biologi">Pendidikan Biologi</option>');
  			} else if (fakultas === 'Teknik') {
  				$("#jurusan").html('<option value=""></option>' +
  			'<option value="Teknik Geologi">Teknik Geologi</option>' +
  			'<option value="Teknik Arsitektur">Teknik Arsitektur</option>' +
  			'<option value="Teknik Elektro">Teknik Elektro</option>' +
  			'<option value="Teknik Kimia">Teknik Kimia</option>' +
  			'<option value="Teknik Mesin">Teknik Mesin</option>' +
  			'<option value="Teknik Pertambangan">Teknik Pertambangan</option>' +
  			'<option value="Teknik Sipil">Teknik Sipil</option>');
  			} else {
  				$("#jurusan").html('<option>Not Available</option>');
  			}
  		});

  		$('#help')
		  .popup({
		    inline   : true,
		    hoverable: true,
		    position : 'top left',
		    delay: {
		      show: 300,
		      hide: 300
		    }
		  })
		;

		var i = 1;
		$("#tambah").click(function() {
			$("#wrapper").append('<div class="fields">' +
  				'<div class="field">' +
			  		'<label for="prestasi">Nama Prestasi</label>' +
			  		'<input type="text" name="prestasi[' + i + ']"/>' +
			  	'</div>' +
			  	'<div class="field">' +
			  		'<label for="instansi">Instansi Pemberi</label>' +
			  		'<input type="text" name="instansi[' + i + ']"/>' +
			  	'</div>' +
			  	'<div class="field">' +
			  		'<label for="tahun">Tahun</label>' +
			  		'<input type="text" name="tahun[' + i + ']" />' +
			  	'</div>' +
  			'</div>');
  			$("select.dropdown").dropdown();
			i++;
		});

		$('#help_pendidikan')
		  .popup({
		    inline   : true,
		    hoverable: true,
		    position : 'top left',
		    delay: {
		      show: 300,
		      hide: 300
		    }
		  })
		;

		var j = 1;
		$("#tambah_pendidikan").click(function() {
			$("#pendidikan_wrapper").append('<div class="fields">' +
  				'<div class="field">' +
			  		'<label for="prestasi">Nama Sekolah</label>' +
			  		'<input type="text" name="pendidikan_sekolah[' + j + ']"/>' +
			  	'</div>' +
			  	'<div class="field">' +
			  		'<label for="tahun">Tahun</label>' +
			  		'<input type="text" name="pendidikan_tahun[' + j + ']" />' +
			  	'</div>' +
  			'</div>');
  			$("select.dropdown").dropdown();
			j++;
		});
	  </script>
</body>
</html>
<?php 
	unset($_SESSION['status']);
?>