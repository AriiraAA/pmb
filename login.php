<?php 
	session_start();
	if (isset($_SESSION['nim'], $_SESSION['nama'], $_SESSION['role'])) {
		header("Location: admin.php");
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
	<style type="text/css">
	 .required {
	 	color: red;
	 }
	</style>
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
		<h1>Login Admin</h1>
	</center>
	<div class="ui grid">
		<div class="two wide column">
			
		</div>
		<div class="four wide column">
			
		</div>
		<div class="four wide column">
			
		</div>
		<div class="four wide column">
				
		</div>
	</div>
	  	<form class="ui form" action="login_process.php" method="POST" style="width: 30%; margin: 0 auto;">
	  		<div class="field">
	  			<label for="nim">NIM <span class="required">*</span></label>
	  			<input type="text" name="nim" id="nim" />
	  		</div>
		  	<div class="field">
		  		<label for="password">Password <span class="required">*</span></label>
		  		<input type="password" name="password" id="password" />
		  	</div>
		  	<input class="ui primary button" type="submit" value="Login" />
	  	</form>
		<?php if (isset($_SESSION["status"]) && $_SESSION["status"] == "gagal"): ?>
			<div class="ui form error" style="width: 30%; margin: 0 auto;">
				<div class="ui error message">
			  		<div class="header">Login Gagal!</div>
			  		<p>NIM/Password anda salah</p>
			  	</div>
			</div>
		<?php endif; ?>

	<!-- Modules -->
	<script type="text/javascript" src="js/app.js"></script>

	<!-- Controllers -->
	<script type="text/javascript" src="js/controller/MainController.js"></script>
</body>
</html>
<?php 
	unset($_SESSION['status']); 
?>