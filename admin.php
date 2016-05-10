<?php 
	session_start(); 
	if (!isset($_SESSION['nim']) || !isset($_SESSION['nama']) || !isset($_SESSION['role'])) {
		header("Location: login.php");
		exit;
	} else {
		$nim	= $_SESSION['nim'];
		$nama	= $_SESSION['nama'];
		$role	= $_SESSION['role'];
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
	<style type="text/css">
	 .required {
	 	color: red;
	 }
	</style>
</head>
<body ng-app="DBAlumni" ng-controller="MainController2">
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
		<h1>Manage Data</h1>
	</center>
  	<?php if (isset($_SESSION['status']) && $_SESSION['status'] == "berhasil"): ?>
		<div class="ui form success">
			<div class="ui success message">
		  		<div class="header">Sukses</div>
		  		<p>Anda berhasil login sebagai admin</p>
		  	</div>
		</div>
	<?php endif; ?>
	<a class="ui primary button" href="logout.php">Logout</a>
	<table class="ui celled padded table" style="text-align: center; width: 90%; margin: 0 auto;">
	  <thead>
	    <tr><th class="single line">Foto</th>
	    <th>Nama</th>
	    <th>NIM</th>
	    <th>Jurusan</th>
	    <th>Fakultas</th>
	    <th>No HP</th>
	    <th></th>
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
	    	<td>
	    		<a class="ui primary button" href="edit.php?nim={{ maba.nim }}">
				  <i class="edit icon"></i> Edit
				</a>
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
<?php 
	unset($_SESSION['status']);
?>