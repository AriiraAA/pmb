<?php include "template/header.php";  ?>

<body ng-app="DBAlumni" ng-controller="MainController">
	
	<?php include "template/navbar.php"; ?>
	
	<center style="margin-top: 6%; margin-bottom: 3%;">
		<h1>Data Mahasiswa Baru Universitas Sriwijaya</h1>
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
	<table class="ui celled padded table" style="text-align: center; width: 90%; margin: 0 auto;">
	  <thead>
	    <tr><th class="single line">Fakultas</th>
	  </tr></thead>
	  <tbody>
	    <tr>
	    	<td><a href="data.php?fakultas=kesmas">Kesehatan Masyarakat</a></td>
	    </tr>
	    <tr>
	    	<td><a href="data.php?fakultas=kedokteran">Kedokteran</a></td>
	    </tr>
	    <tr>
	    	<td><a href="data.php?fakultas=teknik">Teknik</a></td>
	    </tr>
	    <tr>
	    	<td><a href="data.php?fakultas=mipa">Matematika dan Ilmu Pengetahuan Alam</a></td>
	    </tr>
	    <tr>
	    	<td><a href="data.php?fakultas=pertanian">Pertanian</a></td>
	    </tr>
	    <tr>
	    	<td><a href="data.php?fakultas=kip">Keguruan dan Ilmu Pendidikan</a></td>
	    </tr>
	    <tr>
	    	<td><a href="data.php?fakultas=ilkom">Ilmu Komputer</a></td>
	    </tr>
	    <tr>
	    	<td><a href="data.php?fakultas=ekonomi">Ekonomi</a></td>
	    </tr>
	    <tr>
	    	<td><a href="data.php?fakultas=hukum">Hukum</a></td>
	    </tr>
	    <tr>
	    	<td><a href="data.php?fakultas=isip">Ilmu Sosial dan Ilmu Politik</a></td>
	    </tr>
	  </tbody>
	</table>

	<?php include "template/footer.php"; ?>

</body>
</html>