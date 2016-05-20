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

<?php include "template/header.php"; ?>

<body ng-app="DBAlumni" ng-controller="MainController2">
	
	<?php include "template/navbar.php";  ?>

	<center style="margin-top: 6%; margin-bottom: 3%;">
		<h1>Manage Data</h1>
	</center>
  	<?php if (isset($_SESSION['status']) && $_SESSION['status'] == "berhasil"): ?>
		<div style="width: 40%; margin: 0 auto;" class="ui form success">
			<div class="ui success message">
		  		<div class="header">Sukses</div>
		  		<p>Anda berhasil login sebagai admin</p>
		  	</div>
		</div>
	<?php endif; ?>
	<?php if (isset($_SESSION['error']) && $_SESSION['error'] == false): ?>
		<div style="width: 40%; margin: 0 auto;" class="ui form success">
			<div class="ui success message">
		  		<div class="header">Sukses</div>
		  		<p>Anda berhasil menambahkan admin</p>
		  	</div>
		</div>
	<?php elseif (isset($_SESSION['error']) && $_SESSION['error'] == true): ?>
		<div style="width: 40%; margin: 0 auto;" class="ui form error">
			<div class="ui error message">
		  		<div class="header">Error</div>
		  		<p>Anda gagal menambahkan admin</p>
		  	</div>
		</div>
	<?php endif; ?>
	<div align="middle" style="margin-bottom: 2%;">
		<a class="ui positive button" href="download.php?fakultas=<?= $_SESSION['role'] ?>">Download Data</a>
	</div>
	<?php if ($role == "Super Admin"): ?>
		<div id="add_wrap" align="middle" style="margin-bottom: 2%;">
			<button id="add_admin_btn" class="ui primary button"><i class="ui plus icon"></i> Add Admin</button>
			<div style="margin: 0 auto; text-align: left;" id="add_admin_wrapper">
				
			</div>
		</div>
	<?php endif; ?>
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
	    		<img ng-show="maba.url != ''" src="foto/{{ maba.nim }}.png" width="200" height="220">
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
	<?php include "template/footer.php"; ?>

	<script type="text/javascript">
		$("#add_admin_btn").click(function() {
			$("#add_admin_wrapper").append('<form id="add_admin" class="ui form" action="add.php" method="POST">' +
				'<div class="fields">' +
					'<div class="field">' +
						'<label for="nim">NIM <span class="required">*</span></label>' +
						'<input type="text" name="nim" />' +
					'</div>' +
					'<div class="field">' +
						'<label for="nama">Nama <span class="required">*</span></label>' +
						'<input type="text" name="nama" />' +
					'</div>' +
					'<div class="field">' +
						'<label for="role">Role <span class="required">*</span></label>' +
						'<select class="ui dropdown" name="role">' +
							'<option value="Super Admin">Super Admin</option>' +
							'<option value="Kedokteran">Kedokteran</option>' +
							'<option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>' +
							'<option value="Teknik">Teknik</option>' +
							'<option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>' +
							'<option value="Pertanian">Pertanian</option>' +
							'<option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>' +
							'<option value="Ilmu Komputer">Ilmu Komputer</option>' +
							'<option value="Ekonomi">Ekonomi</option>' +
							'<option value="Hukum">Hukum</option>' +
							'<option value="Ilmu Sosial dan Ilmu Politik">Ilmu Sosial dan Ilmu Politik</option>' +
						'</select>' +

					'</div>' +
					'<div class="field">' +
						'<label for="password">Password <span class="required">*</span></label>' +
						'<input type="password" name="password" />' +
					'</div>' +
					'<div class="field">' +
						'<label for="confirm_password">Password Again <span class="required">*</span></label>' +
						'<input type="password" name="confirm_password" />' +
					'</div>' +
					'<div class="field">' +
						'<input class="ui positive button" name="add" type="submit" value="Add" />' +
					'</div>' +
				'</div>' +
			'</form>');
			$("select.dropdown").dropdown();
		});
	</script>
</body>
</html>
<?php 
	unset($_SESSION['status']);
	unset($_SESSION['error']);
?>