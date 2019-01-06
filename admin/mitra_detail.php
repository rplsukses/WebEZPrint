<?php
	$page = 'Mitra';

	include 'core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';

	
	// session
    session_start();
    if(!isset($_SESSION['loginadmin'])) {
      header('location:login.php');
    }else {
      $loginadmin = $_SESSION['loginadmin'];
    }
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
						<center><img src="api/upload/foto_mitra/<?php echo $pecah['foto']; ?>" width="370" height="370"></center>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header card-header-primary">
					<center><h4 class="card-title">Produk</h4></center>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
							<?php
							//Query to get id 
							$ambil=$conn->query("SELECT * FROM produk, kategori
							WHERE id_mitra='$_GET[id]' AND produk.id_kategori = kategori.id_kategori");
							?>
								<tr>
									<th>ID Produk</th>
									<th>Kategori</th>
									<th>Ukuran</th>
									<th>Warna</th>
									<th>Bahan</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
							<?php while ($pecah= $ambil->fetch_assoc()){?>
								<tr>
									<td>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $pecah['id_produk']; ?></td>
									<td><?php echo $pecah['nama'];?></td>
									<td><?php echo $pecah['ukuran']; ?></td>
									<td><?php echo $pecah['warna']; ?></td>
									<td><?php echo $pecah['bahan']; ?></td>
									<td><?php echo $pecah['harga']; ?></td>
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</body>
</html>