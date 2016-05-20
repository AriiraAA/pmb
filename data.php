<?php 
	session_start();
	if (isset($_GET['fakultas'])) {
		$_SESSION['fakultas'] = $_GET['fakultas'];
		if (isset($_GET['jurusan'])) {
			$_SESSION['jurusan'] = $_GET['jurusan'];
		}
	} else {
		header("Location: fakultas.php");
		exit;
	}

	require_once "connect.php";
	$query = mysqli_query($connection, "SELECT nim FROM maba");
	$files = array();
	while ($row = mysqli_fetch_array($query)) {
		$files []= $row['nim'].".png";
	}
	$i = 0;
?>

<?php include "template/header.php"; ?>

<body ng-app="DBAlumni" ng-controller="MainController">
	
	<?php include "template/navbar.php"; ?>
	
	<center style="margin-top: 6%; margin-bottom: 3%;">
		<h1>Data Mahasiswa Baru Universitas Sriwijaya</h1>
	</center>
	<div class="ui grid">
		<div class="two wide column">
			
		</div>
		<div class="four wide column">
			<h4>Jurusan</h4>
			<?php if ($_GET['fakultas'] == "kesmas"): ?>
				<ul style="list-style: none">
					<li><a href="data.php?fakultas=kesmas&jurusan=Kesehatan dan Keselamatan Kerja">Kesehatan dan Keselamatan Kerja</a></li>
				</ul>
			<?php elseif ($_GET['fakultas'] == "kedokteran"): ?>
				<ul style="list-style: none">
					<li><a href="data.php?fakultas=kedokteran&jurusan=Teknik Gigi">Teknik Gigi</a></li>
					<li><a href="data.php?fakultas=kedokteran&jurusan=Kedokteran Gigi">Kedokteran Gigi</a></li>
					<li><a href="data.php?fakultas=kedokteran&jurusan=Ilmu Kesehatan Masyarakat">Ilmu Kesehatan Masyarakat</a></li>
					<li><a href="data.php?fakultas=kedokteran&jurusan=Pendidikan Dokter">Pendidikan Dokter</a></li>
					<li><a href="data.php?fakultas=kedokteran&jurusan=Psikologi">Psikologi</a></li>
				</ul>
			<?php elseif ($_GET['fakultas'] == "teknik"): ?>
				<ul style="list-style: none">
					<li><a href="data.php?fakultas=teknik&jurusan=Teknik Geologi">Teknik Geologi</a></li>
					<li><a href="data.php?fakultas=teknik&jurusan=Teknik Arsitektur">Teknik Arsitektur</a></li>
					<li><a href="data.php?fakultas=teknik&jurusan=Teknik Elektro">Teknik Elektro</a></li>
					<li><a href="data.php?fakultas=teknik&jurusan=Teknik Kimia">Teknik Kimia</a></li>
					<li><a href="data.php?fakultas=teknik&jurusan=Teknik Mesin">Teknik Mesin</a></li>
					<li><a href="data.php?fakultas=teknik&jurusan=Teknik Pertambangan">Teknik Pertambangan</a></li>
					<li><a href="data.php?fakultas=teknik&jurusan=Teknik Sipil">Teknik Sipil</a></li>
				</ul>
			<?php elseif ($_GET['fakultas'] == "mipa"): ?>
				<ul style="list-style: none">
					<li><a href="data.php?fakultas=mipa&jurusan=Farmasi">Farmasi</a></li>
					<li><a href="data.php?fakultas=mipa&jurusan=Biologi">Biologi</a></li>
					<li><a href="data.php?fakultas=mipa&jurusan=Kimia">Kimia</a></li>
					<li><a href="data.php?fakultas=mipa&jurusan=Matematika">Matematika</a></li>
					<li><a href="data.php?fakultas=mipa&jurusan=Ilmu Kelautan">Ilmu Kelautan</a></li>
					<li><a href="data.php?fakultas=mipa&jurusan=Fisika">Fisika</a></li>
				</ul>
			<?php elseif ($_GET['fakultas'] == "pertanian"): ?>
				<select class="ui dropdown" ng-model="order" ng-init="order='Ilmu Tanah'">
					<option value="Ilmu Tanah">Ilmu Tanah</option>
		  			<option value="Teknik Pertanian">Teknik Pertanian</option>
		  			<option value="Teknologi Hasil Perikanan">Teknologi Hasil Perikanan</option>
		  			<option value="Peternakan">Peternakan</option>
		  			<option value="Teknologi Hasil Pertanian">Teknologi Hasil Pertanian</option>
		  			<option value="Agroekoteknologi">Agroekoteknologi</option>
		  			<option value="Agribisnis">Agribisnis</option>
		  			<option value="Budidaya Perairan">Budidaya Perairan</option>
				</select>
				<ul style="list-style: none">
					<li><a href="data.php?fakultas=pertanian&jurusan=Ilmu Tanah">Ilmu Tanah</a></li>
					<li><a href="data.php?fakultas=pertanian&jurusan=Teknik Pertanian">Teknik Pertanian</a></li>
					<li><a href="data.php?fakultas=pertanian&jurusan=Teknologi Hasil Perikanan">Teknologi Hasil Perikanan</a></li>
					<li><a href="data.php?fakultas=pertanian&jurusan=Peternakan">Peternakan</a></li>
					<li><a href="data.php?fakultas=pertanian&jurusan=Teknologi Hasil Pertanian">Teknologi Hasil Pertanian</a></li>
					<li><a href="data.php?fakultas=pertanian&jurusan=Agroekoteknologi">Agroekoteknologi</a></li>
					<li><a href="data.php?fakultas=pertanian&jurusan=Agribisnis">Agribisnis</a></li>
					<li><a href="data.php?fakultas=pertanian&jurusan=Budidaya Perairan">Budidaya Perairan</a></li>
				</ul>
			<?php elseif ($_GET['fakultas'] == "kip"): ?>
				<select class="ui dropdown" ng-model="order" ng-init="order='Pendidikan Jasmani dan Kesehatan'">
					<option value="Pendidikan Jasmani dan Kesehatan">Pendidikan Jasmani dan Kesehatan</option>
		  			<option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
		  			<option value="Pendidikan Fisika">Pendidikan Fisika</option>
		  			<option value="Pendidikan Kimia">Pendidikan Kimia</option>
		  			<option value="Pendidikan Sejarah">Pendidikan Sejarah</option>
		  			<option value="Pendidikan Matematika">Pendidikan Matematika</option>
		  			<option value="Pendidikan Teknik Mesin">Pendidikan Teknik Mesin</option>
		  			<option value="Pendidikan Anak Usia Dini">Pendidikan Anak Usia Dini</option>
		  			<option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
		  			<option value="Bimbingan Konseling">Bimbingan Konseling</option>
		  			<option value="Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</option>
		  			<option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option>
		  			<option value="Pendidikan Bahasa, Sastra, dan Seni">Pendidikan Bahasa, Sastra, dan Seni</option>
		  			<option value="Pendidikan Biologi">Pendidikan Biologi</option>
				</select>
			<?php elseif ($_GET['fakultas'] == "ilkom"): ?>
				<ul style="list-style: none">
					<li><a href="data.php?fakultas=ilkom&jurusan=Komputer Akuntansi (D3)">Komputer Akuntansi (D3)</a></li>
					<li><a href="data.php?fakultas=ilkom&jurusan=Manajemen Informatika (D3)">Manajemen Informatika (D3)</a></li>
					<li><a href="data.php?fakultas=ilkom&jurusan=Sistem Informasi (S1 Bilingual)">Sistem Informasi (S1 Bilingual)</a></li>
					<li><a href="data.php?fakultas=ilkom&jurusan=Sistem Informasi (S1 Profesional)">Sistem Informasi (S1 Profesional)</a></li>
					<li><a href="data.php?fakultas=ilkom&jurusan=Sistem Informasi (S1 Reguler)">Sistem Informasi (S1 Reguler)</a></li>
					<li><a href="data.php?fakultas=ilkom&jurusan=Teknik Komputer dan Jaringan (D3)">Teknik Komputer dan Jaringan (D3)</a></li>
					<li><a href="data.php?fakultas=ilkom&jurusan=Teknik Komputer (D3)">Teknik Komputer (D3)</a></li>
					<li><a href="data.php?fakultas=ilkom&jurusan=Sistem Komputer (S1 Reguler)">Sistem Komputer (S1 Reguler)</a></li>
					<li><a href="data.php?fakultas=ilkom&jurusan=Sistem Komputer (S1 Profesional)">Sistem Komputer (S1 Profesional)</a></li>
					<li><a href="data.php?fakultas=ilkom&jurusan=Teknik Informatika (S1 Reguler)">Teknik Informatika (S1 Reguler)</a></li>
					<li><a href="data.php?fakultas=ilkom&jurusan=Teknik Informatika (S1 Bilingual)">Teknik Informatika (S1 Bilingual)</a></li>
				</ul>
			<?php elseif ($_GET['fakultas'] == "ekonomi"): ?>
				<select class="ui dropdown" ng-model="order" ng-init="order='Manajemen'">
					<option value="Manajemen">Manajemen</option>
		  			<option value="Akuntansi">Akuntansi</option>
		  			<option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
		  			<option value="Magister Manajemen">Magister Manajemen</option>
				</select>
			<?php elseif ($_GET['fakultas'] == "hukum"): ?>
				<select class="ui dropdown" ng-model="order" ng-init="order='Ilmu Hukum'">
					<option value="Ilmu Hukum">Ilmu Hukum</option>
				</select>
			<?php elseif ($_GET['fakultas'] == "isip"): ?>
				<select class="ui dropdown" ng-model="order" ng-init="order='Ilmu Komunikasi'">
					<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
		  			<option value="Sosiologi">Sosiologi</option>
		  			<option value="Administrasi Negara">Administrasi Negara</option>
				</select>
			<?php endif; ?>
			<script type="text/javascript">
				$('select.dropdown').dropdown();
			</script>	
		</div>
		<div class="four wide column">
			
		</div>
		<div class="four wide column">
			<div class="ui icon input">
			  	<input placeholder="Cari nama..." type="text" ng-model="searchString">
			  	<i class="search icon"></i>
			</div>	
		</div>
	</div>
	<table class="ui celled padded table" style="text-align: center; width: 90%; margin: 0 auto;">
	  <thead>
	    <tr><th class="single line">Foto</th>
	    <th>Nama</th>
	    <th>NIM</th>
	    <th>Jurusan</th>
	    <th>Fakultas</th>
	    <th>No HP</th>
	  </tr></thead>
	  <tbody ng-repeat="maba in result | orderBy:'nama' | searchFor:searchString">
	    <tr>
	    	<td>
	    		<img ng-show="foto/{{ maba.nim }}.png" class="ng-hide" src="foto/{{ maba.nim }}.png" width="200" height="220">
	    	</td>
	    	<td>
	    		<a href="detail.php?nim={{ maba.nim }}">{{ maba.nama }}</a>
	    	</td>
	    	<td>
	    		{{ maba.nim }}
	    	</td>
	    	<td>
	    		{{ maba.jurusan }}
	    	</td>
	    	<td>
	    		{{ maba.fakultas }}
	    	</td>
	    	<td>
	    		{{ maba.no_hp }}
	    	</td>
	    </tr>
	  </tbody>
	</table>

	<?php include "template/footer.php"; ?>

</body>
</html>