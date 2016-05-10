<?php  
	session_start();
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
	  <form style="margin-top: 3%;" id="form-alumni" class="ui form" action="process.php" method="POST" enctype="multipart/form-data">
	  	<div class="ui grid">
	  		<div class="four wide column">
	  			
	  		</div>
		  	<div class="seven wide column">
		  		<div>
		  			<div class="field">
				  		<label for="foto">Foto <span class="required">*</span></label>
				  		<div class="ui input">
				  			<input type="file" name="foto" />
				  		</div>
				  	</div>
			  		<div class="field">
			  			<label for="nama">Nama <span class="required">*</span></label>
			  			<input type="text" name="nama" id="nama" />
			  		</div>
				  	<div class="field">
				  		<label for="nim">NIM <span class="required">*</span></label>
				  		<input type="text" name="nim" id="nim" />
				  	</div>
				  	<div class="field">
				  		<label for="fakultas">Fakultas <span class="required">*</span></label>
				  		<select class="ui dropdown" name="fakultas" id="fakultas">
				  			<option value=""></option>
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
				  		</select>
				  	</div>
				  	<div class="field">
				  		<label for="jurusan">Jurusan <span class="required">*</span></label>
				  		<select class="ui dropdown" name="jurusan" id="jurusan">
				  			<option value=""></option>
				  			<option value="Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</option>
				  			<option value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>
				  			<option value="Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</option>
				  			<option value="Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</option>
				  			<option value="Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</option>
				  			<option value="Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</option>
				  			<option value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>
				  			<option value="Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</option>
				  			<option value="Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</option>
				  			<option value="Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</option>
				  			<option value="Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</option>
				  		</select>
				  	</div>
				  	<div class="field">
				  		<label for="tempat_lahir">Tempat Lahir <span class="required">*</span></label>
				  		<input type="text" name="tempat_lahir" id="tempat_lahir" />
				  	</div>
				  	<div class="field">
				  		<label for="tanggal_lahir">Tanggal Lahir <span class="required">*</span></label>
				  		<input type="text" name="tanggal_lahir" id="tanggal_lahir" />
				  	</div>
				  	<div class="field">
				  		<label for="alamat_asal">Alamat Asal <span class="required">*</span></label>
				  		<input type="text" name="alamat_asal" id="alamat_asal" />
				  	</div>
				  	<div class="field">
				  		<label for="alamat_sekarang">Alamat Sekarang <span class="required">*</span></label>
				  		<input type="text" name="alamat_sekarang" id="alamat_sekarang" />
				  	</div>
				  	<div class="field">
				  		<label for="agama">Agama <span class="required">*</span></label>
				  		<input type="text" name="agama" id="agama" />
				  	</div>
				  	<div class="field">
				  		<label for="ukt">UKT <span class="required">*</span></label>
				  		<input type="text" name="ukt" id="ukt" />
				  	</div>
				  	<div class="field">
				  		<label for="golongan_darah">Golongan Darah <span class="required">*</span></label>
				  		<select class="ui dropdown" name="golongan_darah" id="golongan_darah">
				  			<option value="A">A</option>
				  			<option value="B">B</option>
				  			<option value="AB">AB</option>
				  			<option value="O">O</option>
				  		</select>
				  	</div>
				  	<div class="field">
				  		<label for="no_hp">No HP <span class="required">*</span></label>
				  		<input type="text" name="no_hp" id="no_hp" />
				  	</div>
				  	<div class="field">
				  		<label for="facebook">Facebook</label>
				  		<input type="text" name="facebook" id="facebook" />
				  	</div>
				  	<div class="field">
				  		<label for="id_line">ID Line</label>
				  		<input type="text" name="id_line" id="id_line" />
				  	</div>
				  	<div class="field">
				  		<label for="instagram">Instagram</label>
				  		<input type="text" name="instagram" id="instagram" />
				  	</div>
				  	<div class="field">
				  		<label for="pin_bbm">Pin BBM</label>
				  		<input type="text" name="pin_bbm" id="pin_bbm" />
				  	</div>
				   	<div id="tambah_pendidikan" class="negative ui button"><i class="plus icon"></i> Tambah</div>
				  	<div id="help_pendidikan" class="circular ui icon button" data-content="Klik tambah di samping jika memiliki lebih dari satu riwayat pendidikan">
					  <i class="help icon"></i>
					</div>
					<div class="riwayat_pendidikan">
				  		<h4>Riwayat Pendidikan <span class="required">*</span></h4>
				  		<div id="pendidikan_wrapper">
				  			<div class="fields">
				  				<div class="field">
							  		<label for="sekolah">Nama Sekolah</label>
							  		<input type="text" name="pendidikan_sekolah[0]"/>
							  	</div>
							  	<div class="field">
							  		<label for="tahun">Tahun</label>
							  		<input type="text" name="pendidikan_tahun[0]" />
							  	</div>
				  			</div>
				  		</div>
				  	</div>
				  	<br/>
				  	<div id="tambah" class="negative ui button"><i class="plus icon"></i> Tambah</div>
				  	<div id="help" class="circular ui icon button" data-content="Klik tambah di samping jika memiliki lebih dari satu riwayat prestasi">
					  <i class="help icon"></i>
					</div>
				  	<div class="riwayat_prestasi">
				  		<h4>Riwayat Prestasi</h4>
				  		<div id="wrapper">
				  			<div class="fields">
				  				<div class="field">
							  		<label for="prestasi">Nama Prestasi</label>
							  		<input type="text" name="prestasi[0]"/>
							  	</div>
							  	<div class="field">
							  		<label for="instansi">Instansi Pemberi</label>
							  		<input type="text" name="instansi[0]"/>
							  	</div>
							  	<div class="field">
							  		<label for="tahun">Tahun</label>
							  		<input type="text" name="tahun[0]" />
							  	</div>
				  			</div>
				  		</div>
				  	</div>
				  	<?php if (isset($_SESSION["status"]) && $_SESSION["status"] === "Success"): ?>
				  		<div class="ui form success">
				  			<div class="ui success message">
						  		<div class="header">Sukses</div>
						  		<p>Data anda telah dimasukkan</p>
						  		<p><a href="index.php">Lihat</a></p>
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
				  	<input id="submit" class="ui primary button" type="submit" value="Submit" />
				  </div>
		  	</div>
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