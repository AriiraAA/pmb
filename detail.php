<?php  
	if (empty($_GET['nim'])) {
		header("Location: index.php");
		exit;
	}

	require_once "connect.php";
	$query = mysqli_query($connection, "SELECT * FROM maba WHERE nim='".$_GET['nim']."'");
	while ($row = mysqli_fetch_array($query)) {
		$nim 					= $row['nim'];
		$nama 					= $row['nama'];
		$jurusan				= $row['jurusan'];
		$fakultas				= $row['fakultas'];
		$ukt					= $row['ukt'];
		$agama					= $row['agama'];
		$golongan_darah			= $row['golongan_darah'];
		$tempat_lahir			= $row['tempat_lahir'];
		$tanggal_lahir			= $row['tanggal_lahir'];
		$alamat_asal			= $row['alamat_asal'];
		$alamat_sekarang		= $row['alamat_sekarang'];
		$no_hp					= $row['no_hp'];
		$facebook				= $row['facebook'];
		$twitter				= $row['twitter'];
		$id_line				= $row['id_line'];
		$instagram				= $row['instagram'];
		$pin_bbm				= $row['pin_bbm'];
		$pendidikan_sekolah		= explode(',', $row['riwayat_pendidikan']);
		$pendidikan_tahun		= explode(',', $row['tahun_pendidikan']);
		$prestasi				= explode(',', $row['riwayat_prestasi']);
		$instansi				= explode(',', $row['pemberi_prestasi']);
		$tahun					= explode(',', $row['tahun_prestasi']);
	}
?>

<?php include "template/header.php"; ?>

<body>
	
	<?php include "template/navbar.php"; ?>

	<center style="margin-top: 6%">
		<h1>Data Mahasiswa Baru Universitas Sriwijaya</h1>
	</center>
	<div class="ui grid">
		<div class="four wide column">
		</div>
		<div class="eight wide column">
			<table class="ui definition table">
				<tbody>
					<tr>
						<td colspan="2" style="text-align: center;">
							<img width="240" height="250" src="<?= 'foto/' . $nim . '.png' ?>" />
						</td>
					</tr>
					<tr>
						<td>NIM</td>
						<td><?= $nim ?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><?= $nama ?></td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td><?= $jurusan ?></td>
					</tr>
					<tr>
						<td>Fakultas</td>
						<td><?= $fakultas ?></td>
					</tr>
					<tr>
						<td>Agama</td>
						<td><?= $agama ?></td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td><?= $tempat_lahir ?></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><?= $tanggal_lahir ?></td>
					</tr>
					<tr>
						<td>Alamat Asal</td>
						<td><?= $alamat_asal ?></td>
					</tr>
					<tr>
						<td>Alamat Sekarang</td>
						<td><?= $alamat_sekarang ?></td>
					</tr>
					<tr>
						<td>Golongan Darah</td>
						<td><?= $golongan_darah ?></td>
					</tr>
					<tr>
						<td>No HP</td>
						<td><?= $no_hp ?></td>
					</tr>
					<tr>
						<td>Facebook</td>
						<td><?= $facebook ?></td>
					</tr>
					<tr>
						<td>Twitter</td>
						<td><?= $twitter ?></td>
					</tr>
					<tr>
						<td>ID Line</td>
						<td><?= $id_line ?></td>
					</tr>
					<tr>
						<td>Instagram</td>
						<td><?= $instagram ?></td>
					</tr>
					<tr>
						<td>Pin BBM</td>
						<td><?= $pin_bbm ?></td>
					</tr>
				</tbody>
			</table>
			<table class="ui table">
				<thead>
					<th>Nama Sekolah</th>
					<th>Tahun</th>
				</thead>
				<?php 
					$i = 0;
					foreach ($pendidikan_sekolah as $p) {
						echo "<tr>
								<td>".$pendidikan_sekolah[$i]."</td>
								<td>".$pendidikan_tahun[$i]."</td>
							</tr>";
						$i++;
					}
				?>
			</table>
			<table class="ui table">
				<thead>
					<th>Prestasi</th>
					<th>Instansi Pemberi</th>
					<th>Tahun</th>
				</thead>
				<?php 
					$i = 0;
					foreach ($prestasi as $p) {
						echo "<tr>
								<td>".$prestasi[$i]."</td>
								<td>".$instansi[$i]."</td>
								<td>".$tahun[$i]."</td>
							</tr>";
						$i++;
					}
				?>
			</table>
		</div>
	</div>
	<div class="ui grid">
		<div class="four wide column">
			
		</div>
		<div class="four wide column">
			<a class="ui button" href="index.php">Back</a>	
		</div>
	</div>
</body>
</html>