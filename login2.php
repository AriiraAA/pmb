<?php 
	session_start();
	if (isset($_SESSION['nim'])) {
		header("Location: edit2.php");
		exit;
	}
?>

<?php include "template/header.php"; ?>

<body ng-app="DBAlumni" ng-controller="MainController">

	<?php include "template/navbar.php"; ?>

	<center style="margin-top: 6%; margin-bottom: 3%;">
		<h1>Login Maba</h1>
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
	  	<form class="ui form" action="auth_process.php" method="POST" style="width: 30%; margin: 0 auto;">
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

	<?php include "template/footer.php"; ?>

</body>
</html>
<?php 
	unset($_SESSION['status']); 
?>