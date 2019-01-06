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

    <!-- Navbar -->
		<div class="main-panel">
			<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
				<div class="container-fluid">
					<div class="collapse navbar-collapse justify-content-end">
						<form class="navbar-form">
							<div class="input-group no-border">
								<input class="form-control" placeholder="Search..." type="text" value=""> <button class="btn btn-white btn-round btn-just-icon" type="submit"><i class="material-icons">search</i>
								<div class="ripple-container"></div></button>
							</div>
						</form>
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="mitra.php"><i class="material-icons">store</i>
								<p class="d-lg-none d-md-block">Stats</p></a>
							</li>
						</ul>
						<ul class="navbar-nav">
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
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">Tabel Mitra</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table cellspacing="0" class="table" id="dtBasicExample" width="100%">
											<thead class=" text-primary">
												<tr>
													<th>No.</th>
													<th>Nama</th>
													<th>Last Seen</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$halaman = 10;
												$page = isset($_GET["halaman"])?(int)$_GET["halaman"] : 1;
												$mulai = ($page>1)?($page * halaman) - $halaman : 0;
												$ambil = $conn->query("SELECT * FROM mitra");
												$total = mysqli_num_rows($ambil);
												$pages = ceil($total/$halaman);
												$pagination = $conn->query("SELECT * FROM mitra LIMIT $mulai, $halaman")or die(mysql_error);
												$no = $mulai+1;

												while ($pecah=$ambil->fetch_assoc()){ ?>
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $pecah['nama']; ?></td>
													<td><?php echo $pecah['last_seen']; ?></td>
													<td>
														<a href="mitra_detail.php?id=<?php echo $pecah['id_mitra'];?>" class="btn btn-success btn-sm">Detail</a>
													</td>
												</tr>

												<?php } ?>
											
											</tbody>
										</table>
										</div>
										</div>
										</div>
										<nav aria-label="pagination">
										<ul class="pagination justify-content-center">
										<li class=page-item active><span class="page-link">
										<?php for ($i=1; $i<=$pages ; $i++){ ?>
										<a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
										<?php } ?>
										<span class="sr-only">(current)</span></span>
										</li>
										</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Content -->

		</body>
		</html>
