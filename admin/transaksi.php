<?php
	$page = 'Transaksi';
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
	
	//Query Transaksi
	$status=$_GET['status'];
	$query="SELECT transaksi.id_transaksi, transaksi.tgl_pesan, user.nama AS nama_user, mitra.nama AS nama_mitra, kategori.nama AS nama_kategori, transaksi.harga_total
	FROM transaksi, user, produk, kategori, mitra
	WHERE transaksi.status=".$status."
	AND user.id_user=transaksi.id_user 
	AND produk.id_produk=transaksi.id_produk 
	AND kategori.id_kategori=produk.id_kategori
	AND mitra.id_mitra = transaksi.id_mitra";
	$result = mysqli_query($conn, $query);
?>


			<!-- Navbar -->
			<div class="main-panel">
			<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<a class="navbar-brand" href="#pablo"></a>
					</div><button aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="navbar-toggler-icon icon-bar"></span> <span class="navbar-toggler-icon icon-bar"></span> <span class="navbar-toggler-icon icon-bar"></span></button>
					<div class="collapse navbar-collapse justify-content-end">
						<form class="navbar-form">
							<div class="input-group no-border">
								<input class="form-control" placeholder="Search..." type="text" value=""> <button class="btn btn-white btn-round btn-just-icon" type="submit"><i class="material-icons">search</i>
								<div class="ripple-container"></div></button>
							</div>
						</form>
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#pablo"><i class="material-icons">assignment</i>
								<p class="d-lg-none d-md-block">Stats</p></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#pablo"><i class="material-icons">person</i>
								<p class="d-lg-none d-md-block">Account</p></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End Navbar -->

			<!-- Content -->
			<div class="content">
			<div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-8">
                            <div class="responsive text-right hidden-sm hidden-xs">
                                <ul class="nav nav-pills">
                                    <li class="<?php if($status == 0) echo 'nav-item active';?>">
                                         <a class="nav-link" href="transaksi.php?status=0">Belum Diproses</a>
                                    </li>
                                    <li class="<?php if($status == 1) echo 'nav-item active';?>">
                                        <a class="nav-link" href="transaksi.php?status=1">Sedang Diproses</a>
                                    </li>
                                    <li class="<?php if($status == 2) echo 'nav-item active';?>">
                                        <a class="nav-link" href="transaksi.php?status=2">Selesai</a>
                                    </li>
                                    <li class="<?php if($status == 3) echo 'nav-item active';?>">
                                        <a class="nav-link" href="transaksi.php?status=3">Pembatalan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
                            	<?php if($status == 0) { ?>
								<div class="card-header card-header-primary">
									<h4 class="card-title"><center>Belum Diproses</center></h4>
								</div>
								<?php }else if($status == 1){?>
								<div class="card-header card-header-primary">
									<h4 class="card-title"><center>Sedang Diproses</center></h4>
								</div>
								<?php } else if($status == 2) {?>
									<div class="card-header card-header-primary">
									<h4 class="card-title"><center>Selesai</center></h4>
								</div>
								<?php } else {?>
									<div class="card-header card-header-primary">
									<h4 class="card-title"><center>Pembatalan</center></h4>
								</div>
								<?php }?>

								<div class="card-body">
									<div class="table-responsive">
										<table class="table">
											<thead class=" text-primary">
												<tr>
													<th>ID</th>
													<th>Tgl Order</th>
													<th>User</th>
													<th>Mitra</th>
													<th>Kategori</th>
													<th>Harga</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php while($row=$result->fetch_assoc()){ ?>
											<tr >
											<td><?php echo $row['id_transaksi']; ?></td>
											<td><?php echo $row['tgl_pesan']; ?></td>
											<td><?php echo $row['nama_user']; ?></td>
											<td><?php echo $row['nama_mitra']; ?></td>
											<td><?php echo $row['nama_kategori']; ?></td>
											<td><?php echo $row['harga_total']; ?></td>
											<td>
												<a href="transaksi_detail.php?id=<?php echo $row['id_transaksi']; ?>" class="btn btn-success btn-sm">Detail</a>
											</td>
											</tbody>
											<?php }?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
