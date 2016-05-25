<?php  
	session_start();
	if (!isset($_SESSION['role']) || !($_SESSION['role'] == "Super Admin" || $_SESSION['role'] == "Ilmu Komputer" || $_SESSION['role'] == "Kedokteran" || $_SESSION['role'] == "Kesehatan Masyarakat" || $_SESSION['role'] == "Teknik" || $_SESSION['role'] == "Matematika dan Ilmu Pengetahuan Alam" || $_SESSION['role'] == "Pertanian" || $_SESSION['role'] == "Keguruan dan Ilmu Pendidikan" || $_SESSION['role'] == "Ekonomi" || $_SESSION['role'] == "Hukum" || $_SESSION['role'] == "Ilmu Sosial dan Ilmu Politik")) {
		header("Location: data.php");
		exit;
	} 
?>

<?php include "template/header.php"; ?>

<body>
	
	<?php include "template/navbar.php"; ?>

	<center>
		<h1 style="margin-top: 6%">Form Pengisian Data Mahasiswa Baru Universitas Sriwijaya</h1>		
	</center>
	<div class="container">
		<form style="width: 70%; margin: 0 auto;" action="generate.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nama">Nama <span class="required">*</span></label>
				<input class="form-control" type="text" name="nama">
			</div>
			<div class="form-group">
				<label for="nim">NIM <span class="required">*</span></label>
				<input class="form-control" type="text" name="nim">
			</div>
			<div class="form-group">
		  		<label for="fakultas">Fakultas <span class="required">*</span></label>
		  		<select class="form-control" name="fakultas" id="fakultas">
		  			<option></option>
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
		  	<div class="form-group">
		  		<label for="jurusan">Jurusan <span class="required">*</span></label>
		  		<select class="form-control" name="jurusan" id="jurusan">
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
	  		<div class="form-group">
	  			<label for="no_hp">No Hp <span class="required">*</span></label>
	  			<input class="form-control" type="text" name="no_hp" />
	  		</div>
	  		<div class="form-group">
	  			<label for="facebook">Facebook</label>
	  			<input class="form-control" type="text" name="facebook">
	  		</div>
	  		<center>
	  			<input class="btn btn-success" type="submit" value="Submit">
	  		</center>
		</form>
	</div>

	  <script type="text/javascript">
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
			i++;
		});

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
			j++;
		});
	  </script>
</body>
</html>
<?php
	unset($_SESSION['status']);
	unset($_SESSION['nim_maba']);
	unset($_SESSION['password']);
?>