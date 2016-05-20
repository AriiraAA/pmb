<?php  
	require_once "connect.php";

	$query = mysqli_query($connection, "SELECT COUNT(isu) AS setuju FROM maba WHERE isu='Setuju'");
	while ($row = mysqli_fetch_array($query)) {
		$setuju = $row['setuju'];
	}

	$query = mysqli_query($connection, "SELECT COUNT(isu) AS tidak_setuju FROM maba WHERE isu='Tidak Setuju'");
	while ($row = mysqli_fetch_array($query)) {
		$tidak_setuju = $row['tidak_setuju'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Penerimaan Mahasiswa Baru 2016 Universitas Sriwijaya</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/chart.js"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <script type="text/javascript" src="inc/TimeCircles.js"></script>
    <link rel="stylesheet" href="inc/TimeCircles.css" />
    <link rel="shortcut icon" href="logo/unsri.jpg">
	<style type="text/css">
		.bemu{
			border: 2px solid black;
			height: 300px;
		}
		.content{
			margin-top: 5%;
		}

		#cd {
			color: white;
			margin-top: 3%;  
		}
		.title{
			text-align: center;
			font-size: 36px;
			font-weight: bolder;
			color: white;
			margin-top: 1%;
		}
		.countdown{
			margin-top: 4%;
			margin-bottom: 2%;
			height: 80%;
			padding: 4 col-sm-4%;
			background-color: rgba(0,0,0,0.3);
		}
		.logo {
			width: 100px;
			height: 100px;
			margin: 0 auto;
			margin-top: 5%;
		}
		.a, .b, .c, .d{
			margin-bottom: 4%;
		}
		
		.logo img {
			width: 100%;
			height: 100%;
		}

		h4{
			text-align: center;
		}

		h4 col-sm-4{
			text-align: center;
			font-weight: bolder;
			font-family: Verdana;
		}

		#footer {
			background-color: #f8f8f8;
  			border-color: #e7e7e7;
			height: 6%;
			color: #777;
			padding-top: 3%;
			padding-bottom: 2%;
			margin-top: 8%;
		}

		#topContainer{
			background-image: url('assets/bgrn/8.jpg');
			background-size: cover;
			margin-top: -2%;
		}

		.logo_img {
			width: 100%;
			height: 100%;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Penerimaan Mahasiswa Baru</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="float:right;">
      <ul class="nav navbar-nav">
        <li><a href="fakultas.php">Data <span class="sr-only">(current)</span></a></li>
        <li><a href="login2.php">Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="row" id="topContainer">
	<div class="container countdown">
		<div class="title">
			Hitung Mundur Hari Pertama Kuliah</br> 
			Mahasiswa Baru 2016	Universitas Sriwijaya 	
		</div>
		<div id="cd" class="cd" data-date="2016-08-08 00:00:00"></div>
		<script type="text/javascript">
			$(".cd").TimeCircles();
		</script>
	</div>
</div>
<div class="container">
	<a href="">
		<div class="row bemu">
			BANNER BEMU
		</div>
	</a>
</div>

<div class="container">
	<div class="row content">
		<div class="col-md-8">
			<div class="row a">
				<a href="">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/unsri.jpg" class="logo_img"/>
						</div>	
						<h4>BEM KM Fakultas Ekonomi</h4>
					</div>	
				</a>
				<a href="">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/unsri.jpg" class="logo_img"/>
						</div>	
						<h4>BEM KM Fakultas Hukum</h4>
					</div>	
				</a>
				<a href="">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/unsri.jpg" class="logo_img"/>
						</div>	
						<h4>BEM KM Fakultas Teknik</h4>
					</div>	
				</a>
				<a href="http://www.fkunsribem.wix.com/fkunsribem ">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/fk.jpg" class="logo_img" />
						</div>	
						<h4>BEM KM Fakultas Kedokteran</h4>
					</div>	
				</a>
			</div>
			<div class="row b">
				<a href="">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/unsri.jpg" class="logo_img"/>
						</div>	
						<h4>BEM KM Fakultas PSKG</h4>
					</div>	
				</a>
				<a href="">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/unsri.jpg" class="logo_img"/>
						</div>	
						<h4>BEM KM Fakultas PSIK</h4>
					</div>	
				</a>
				<a href="">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/unsri.jpg" class="logo_img"/>
						</div>	
						<h4>BEM KM Fakultas Psikologi</h4>
					</div>	
				</a>
				<a href="">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/unsri.jpg" class="logo_img"/>
						</div>	
						<h4>BEM KM Fakultas Pertanian</h4>
					</div>	
				</a>
			</div>
			<div class="row c">
				<a href="">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/unsri.jpg" class="logo_img"/>
						</div>	
						<h4>BEM KM Fakultas</br> Keguruan dan Ilmu Pendiidkan </h4>
					</div>	
				</a>
				<a href="">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/fisip.jpg" class="logo_img"/>
						</div>	
						<h4>BEM KM Fakultas</br> Ilmu Sosial dan Ilmu Politik</h4>
					</div>	
				</a>
				<a href="">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/unsri.jpg" class="logo_img"/>
						</div>	
						<h4 style="font-size: 17px;">BEM KM Fakultas</br> Matematika dan Ilmu Pengetahuan Alam</h4>
					</div>	
				</a>
				<a href="http://bem.ilkom.unsri.ac.id">
					<div class="col-md-3">
						<div class="logo">
							<img src="http://bem.ilkom.unsri.ac.id/a/assets/img/logobem.png" class="logo_img"/>
						</div>	
						<h4>BEM KM Fakultas Ilmu Komputer</h4>
					</div>	
				</a>
			</div>
			<div class="row d">
				<a href="http://www.bem.fkm.unsri.ac.id/">
					<div class="col-md-3">
						<div class="logo">
							<img src="logo/fkm.jpg" class="logo_img" />
						</div>	
						<h4>BEM KM Fakultas Kesehatan Masyarakat</h4>
					</div>	
				</a>
			</div>
		</div>
		<div class="col-md-3 komentar">
			<h3>Apakah anda setuju dengan usulan masa kuliah maksimal 5 tahun?</h3>
			<canvas id="isuChart" width="400" height="400"></canvas>
			<script type="text/javascript">
				var ctx = document.getElementById("isuChart");
				var data = {
				    labels: [
				        "Tidak Setuju",
				        "Setuju"
				    ],
				    datasets: [
				        {
				            data: [<?= $tidak_setuju ?>, <?= $setuju ?>],
				            backgroundColor: [
				                "#FF6384",
				                "#36A2EB"
				            ],
				            hoverBackgroundColor: [
				                "#FF6384",
				                "#36A2EB"
				            ]
				        }]
				};
				var isuChart = new Chart(ctx, {
				    type: 'pie',
				    data: data,
				});
			</script>
			<p><b>Total voters: <?= $setuju + $tidak_setuju ?></b></p>
			<p><?php 
					date_default_timezone_set("Asia/Jakarta");
					echo date("Y-m-d H:i:s"); 
				?>
			</p>
		</div>
	</div>
</div>	

<footer id="footer">
	<div class="container">
		<div class="pull-left">
			&copy; BEM KM Fasilkom Unsri 2016
		</div>
		<div class="pull-right">
			Created by PTI BEM KM Fasilkom Unsri
		</div>
	</div>
</footer>
<script type="text/javascript">
	var docHeight = $(window).height();
	var footerHeight = $('#footer').height();
	var footerTop = $('#footer').position().top + footerHeight;

	if (footerTop < docHeight) {
		$('#footer').css('margin-top', (docHeight - footerTop - 15) + 'px');
	}
	
	$("#topContainer").css("height", $(window).height());
	$(".contentContainer").css("min-height", $(window).height());

</script>		

</body>
</html>