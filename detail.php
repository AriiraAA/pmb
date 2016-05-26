<?php  
	if (empty($_GET['nim']) && !isset($_SESSION['role'])) {
		header("Location: index.php");
		exit;
	}

	require_once "connect.php";
	$query = mysqli_query($connection, "SELECT * FROM maba WHERE nim='".$_GET['nim']."'");
	while ($row = mysqli_fetch_array($query)) {
		$nim 					= $row['nim'];
		$password 				= $row['password'];
		$nama 					= $row['nama'];
		$jenis_kelamin			= $row['jenis_kelamin'];
		$jurusan				= $row['jurusan'];
		$fakultas				= $row['fakultas'];
		$ukt					= $row['ukt'];
		$agama					= $row['agama'];
		$tempat_lahir			= $row['tempat_lahir'];
		$tanggal_lahir			= $row['tanggal_lahir'];
		$alamat_asal			= $row['alamat_asal'];
		$alamat_sekarang		= $row['alamat_sekarang'];
		$asal_daerah			= $row['asal_daerah'];
		$skill 					= $row['skill'];
		$nama_ayah				= $row['nama_ayah'];
		$alamat_ayah			= $row['alamat_ayah'];
		$pekerjaan_ayah			= $row['pekerjaan_ayah'];
		$penghasilan_ayah		= $row['penghasilan_ayah'];
		$no_hp_ayah				= $row['no_hp_ayah'];
		$nama_ibu				= $row['nama_ibu'];
		$alamat_ibu				= $row['alamat_ibu'];
		$pekerjaan_ibu			= $row['pekerjaan_ibu'];
		$penghasilan_ibu		= $row['penghasilan_ibu'];
		$no_hp_ibu				= $row['no_hp_ibu'];
		$jumlah_tanggungan 		= $row['jumlah_tanggungan'];
		$no_hp					= $row['no_hp'];
		$email 					= $row['email'];
		$facebook				= $row['facebook'];
		$isu 					= $row['isu'];
		$anak_ke 				= explode(',', $row['anak_ke']);
		$riwayat_pendidikan		= explode(',', $row['riwayat_pendidikan']);
		$tahun_pendidikan		= explode(',', $row['tahun_pendidikan']);
		$riwayat_prestasi		= explode(',', $row['riwayat_prestasi']);
		$pemberi_prestasi		= explode(',', $row['pemberi_prestasi']);
		$tahun_prestasi			= explode(',', $row['tahun_prestasi']);
		$riwayat_organisasi		= explode(',', $row['riwayat_organisasi']);
		$tahun_organisasi		= explode(',', $row['tahun_organisasi']);
		$jabatan_organisasi		= explode(',', $row['jabatan_organisasi']);
	}
?>

<?php include "template/header.php"; ?>

<body>
	<script src="https://use.fontawesome.com/b24094c187.js"></script>
	<?php include "template/navbar.php"; ?>

	<div class="container">
		<center style="margin-top: 6%">
			<h1>Data Mahasiswa Baru Universitas Sriwijaya</h1>
		</center>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="glyphicon glyphicon-user"></i> Data Pribadi</h3>
				  </div>
				  <div class="panel-body">
				    <table class="table">
				    	<tr>
				    		<td><b>Nama</b></td>
				    		<td><?= $nama ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>NIM</b></td>
				    		<td><?= $nim ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Fakultas</b></td>
				    		<td><?= $fakultas ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Jurusan</b></td>
				    		<td><?= $jurusan ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Jenis Kelamin</b></td>
				    		<td><?= $jenis_kelamin ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>UKT</b></td>
				    		<td><?= 'Rp. ' . number_format( $ukt, 0 , '' , '.' ) . ',-' ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Agama</b></td>
				    		<td><?= $agama ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Tempat Lahir</b></td>
				    		<td><?= $tempat_lahir ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Tanggal Lahir</b></td>
				    		<td><?= $tanggal_lahir ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Alamat Asal</b></td>
				    		<td><?= $alamat_asal ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Alamat Sekarang</b></td>
				    		<td><?= $alamat_sekarang ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Asal Daerah</b></td>
				    		<td><?= $asal_daerah ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Skill</b></td>
				    		<td><?= $skill ?></td>
				    	</tr>
				    </table>
				  </div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-users"></i> Data Keluarga</h3>
				  </div>
				  <div class="panel-body">
				    <div class="panel panel-info">
					  <div class="panel-heading">
					    <h3 class="panel-title">Data Ayah</h3>
					  </div>
					  <div class="panel-body">
					    <table class="table">
					    	<tr>
					    		<td><b>Nama Ayah</b></td>
					    		<td><?= $nama_ayah ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Alamat Ayah</b></td>
					    		<td><?= $alamat_ayah ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Pekerjaan Ayah</b></td>
					    		<td><?= $pekerjaan_ayah ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Penghasilan Ayah</b></td>
					    		<td><?= $penghasilan_ayah ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>No HP Ayah</b></td>
					    		<td><?= $no_hp_ayah ?></td>
					    	</tr>
					    </table>
					  </div>
					</div>
					<div class="panel panel-info">
					  <div class="panel-heading">
					    <h3 class="panel-title">Data Ibu</h3>
					  </div>
					  <div class="panel-body">
					    <table class="table">
					    	<tr>
					    		<td><b>Nama Ibu</b></td>
					    		<td><?= $nama_ibu ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Alamat Ibu</b></td>
					    		<td><?= $alamat_ibu ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Pekerjaan Ibu</b></td>
					    		<td><?= $pekerjaan_ibu ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>Penghasilan Ibu</b></td>
					    		<td><?= $penghasilan_ibu ?></td>
					    	</tr>
					    	<tr>
					    		<td><b>No HP Ibu</b></td>
					    		<td><?= $no_hp_ibu ?></td>
					    	</tr>
					    </table>
					  </div>
					</div>
					<table class="table">
						<tr>
							<td><b>Anak-ke</b></td>
							<td><?php if (isset($anak_ke[0])) echo $anak_ke[0]; ?> dari <?php if (isset($anak_ke[1])) echo $anak_ke[1]; ?> bersaudara</td>
						</tr>
						<tr>
							<td><b>Jumlah Tanggungan</b></td>
							<td><?= $jumlah_tanggungan ?></td>
						</tr>
					</table>
				  </div>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-phone"></i> Kontak</h3>
				  </div>
				  <div class="panel-body">
				    <table class="table">
				    	<tr>
				    		<td><b>No HP / WhatsApp</b></td>
				    		<td><?= $no_hp ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Email</b></td>
				    		<td><?= $email ?></td>
				    	</tr>
				    	<tr>
				    		<td><b>Facebook</b></td>
				    		<td><?= $facebook ?></td>
				    	</tr>
				    </table>
				  </div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-institution"></i> Riwayat Pendidikan</h3>
				  </div>
				  <div class="panel-body">
				  	<table class="table">
				  		<thead>
				  			<th>Nama Sekolah</th>
				  			<th>Tahun Lulus</th>
				  		</thead>
				  		<tbody>
				  			<?php
						    	$i = 0; 
						    	foreach ($riwayat_pendidikan as $pend) {
						    		echo '<tr>
						    				<td>'.$riwayat_pendidikan[$i].'</td>
						    				<td>'.$tahun_pendidikan[$i++].'</td>
						    			</tr>';
						    	}
						    ?>
				  		</tbody>
				  	</table>
				  </div>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-users"></i> Riwayat Organisasi</h3>
				  </div>
				  <div class="panel-body">
				    <table class="table">
				  		<thead>
				  			<th>Nama Organisasi</th>
				  			<th>Jabatan</th>
				  			<th>Tahun Kepengurusan</th>
				  		</thead>
				  		<tbody>
				  			<?php
						    	$i = 0; 
						    	foreach ($riwayat_organisasi as $org) {
						    		echo '<tr>
						    				<td>'.$riwayat_organisasi[$i].'</td>
						    				<td>'.$jabatan_organisasi[$i].'</td>
						    				<td>'.$tahun_organisasi[$i++].'</td>
						    			</tr>';
						    	}
						    ?>
				  		</tbody>
				  	</table>
				  </div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title"><i class="fa fa-archive"></i> Riwayat Organisasi</h3>
				  </div>
				  <div class="panel-body">
				    <table class="table">
				  		<thead>
				  			<th>Nama Prestasi</th>
				  			<th>Instansi Pemberi</th>
				  			<th>Tahun</th>
				  		</thead>
				  		<tbody>
				  			<?php
						    	$i = 0; 
						    	foreach ($riwayat_prestasi as $pres) {
						    		echo '<tr>
						    				<td>'.$riwayat_prestasi[$i].'</td>
						    				<td>'.$pemberi_prestasi[$i].'</td>
						    				<td>'.$tahun_prestasi[$i++].'</td>
						    			</tr>';
						    	}
						    ?>
				  		</tbody>
				  	</table>
				  </div>
				</div>	
			</div>
		</div>
	</div>
	<center>
		<button class="btn btn-danger" onclick="window.history.back();"><i class="glyphicon glyphicon-arrow-left"></i> Back</button>
	</center>


	<?php include "template/footer.php" ?>
</body>
</html>