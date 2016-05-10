<?php 
	session_start();
	if (isset($_GET['fakultas'])) {
		$_SESSION['fakultas'] = $_GET['fakultas'];
	} else {
		header("Location: data.php");
		exit;
	}
?>

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
	    <tr><th class="single line">Foto</th>
	    <th>Nama</th>
	    <th>NIM</th>
	    <th>Jurusan</th>
	    <th>Fakultas</th>
	    <th>No HP</th>
	  </tr></thead>
	  <tbody ng-repeat="maba in result | orderBy:order | searchFor:searchString">
	    <tr>
	    	<td>
	    		<img src="foto/{{ maba.nim }}.png" width="200" height="220">
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

	<!-- Modules -->
	<script type="text/javascript" src="js/app.js"></script>

	<!-- Controllers -->
	<script type="text/javascript" src="js/controller/MainController.js"></script>
</body>
</html>