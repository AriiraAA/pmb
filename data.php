<!DOCTYPE html>
<html>
<head>
	<title>Penerimaan Mahasiswa Baru Universitas Sriwijaya</title>
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
	<script src="semantic/semantic.min.js"></script>
	<script type="text/javascript" src="js/angular.js"></script>
	<link rel="shortcut icon" href="http://bem.ilkom.unsri.ac.id/wp-content/uploads/2015/04/favicon-1.png">
</head>
<body ng-app="DBAlumni" ng-controller="MainController">
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
	<center style="margin-top: 6%; margin-bottom: 3%;">
		<h1>Data Mahasiswa Baru Universitas Sriwijaya</h1>
	</center>
	<div class="ui grid">
		<div class="two wide column">
			
		</div>
		<div class="four wide column">
			<select class="ui dropdown" ng-model="order" ng-init="order='nama'">
				<option value="nama">Nama</option>
				<option value="jurusan">Jurusan</option>
			</select>
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
	    <tr><th class="single line">Fakultas</th>
	  </tr></thead>
	  <tbody>
	    <tr>
	    	<td><a href="index.php?fakultas=kesmas">Kesehatan Masyarakat</a></td>
	    </tr>
	    <tr>
	    	<td><a href="index.php?fakultas=kedokteran">Kedokteran</a></td>
	    </tr>
	    <tr>
	    	<td><a href="index.php?fakultas=teknik">Teknik</a></td>
	    </tr>
	    <tr>
	    	<td><a href="index.php?fakultas=mipa">Matematika dan Ilmu Pengetahuan Alam</a></td>
	    </tr>
	    <tr>
	    	<td><a href="index.php?fakultas=pertanian">Pertanian</a></td>
	    </tr>
	    <tr>
	    	<td><a href="index.php?fakultas=kip">Keguruan dan Ilmu Pendidikan</a></td>
	    </tr>
	    <tr>
	    	<td><a href="index.php?fakultas=ilkom">Ilmu Komputer</a></td>
	    </tr>
	    <tr>
	    	<td><a href="index.php?fakultas=ekonomi">Ekonomi</a></td>
	    </tr>
	    <tr>
	    	<td><a href="index.php?fakultas=hukum">Hukum</a></td>
	    </tr>
	    <tr>
	    	<td><a href="index.php?fakultas=isip">Ilmu Sosial dan Ilmu Politik</a></td>
	    </tr>
	  </tbody>
	</table>

	<!-- Modules -->
	<script type="text/javascript" src="js/app.js"></script>

	<!-- Controllers -->
	<script type="text/javascript" src="js/controller/MainController.js"></script>
</body>
</html>