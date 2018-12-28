<?php
	$page = 'Mitra';

	include 'core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';
?>

<!-- Content -->
	<div class="main-panel">
		<div class="content">
		<div class="container-fluid">
			<div class="row">
			<?php
				//Query to get id 
				$ambil=$conn->query("SELECT * FROM mitra WHERE id_mitra='$_GET[id]'");
				$pecah= $ambil->fetch_assoc();
			?>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header card-header-primary">
						<center><h3 class="card-title">Profil Mitra</h3></center>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td><b>Nama : <?php echo $pecah['nama']; ?></b></td>
									</tr>
									<tr>
										<td><b>Alamat : <?php echo $pecah['alamat'];?></b></td>
									</tr>
									<tr>
										<td><b>Telepon : <?php echo $pecah['no_telepon'];?></b></td>
									</tr>
									<tr>
										<td><b>Email : <?php echo $pecah['email'];?></b></td>
									</tr>
									<tr>
										<td><b>Nama Pemilik : <?php echo $pecah['nama_pemilik'];?></b></td>
									</tr>
									<tr>
										<td><b>Telp. Pemilik : <?php echo $pecah['telp_pemilik'];?></b></td>
									</tr>
									<tr>
										<td><b>Email Pemilik : <?php echo $pecah['email_pemilik'];?></b></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header card-header-primary">
						<center><h4 class="card-title">Foto Mitra</h4></center>
					</div>
						<div class="card-body">
						<center><img src="icon/<?php echo $pecah['foto']; ?>" width="370" height="370"></center>
						</div>
					</div>
				</div>
			</div>