<?php
<<<<<<< HEAD
	$page = 'Transaksi';
	include 'core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';
=======
	include_once 'api/config/database.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';
    $database = new Database();
    $db = $database->getConnection();
>>>>>>> mitra-new
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
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">Tabel Transaksi</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table">
											<thead class=" text-primary">
												<tr>
													<th>No</th>
													<th>ID Transaksi<i aria-hidden="true" class="fa fa-sort float-right"></i></th>
													<th>Tgl Order<i aria-hidden="true" class="fa fa-sort float-right"></i></th>
													<th>Nama<i aria-hidden="true" class="fa fa-sort float-right"></i></th>
													<th>Mitra</th>
													<th>Status</th>
													<th>Detail</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td></td>
													<td></td>
													<td></td>
													<td class="text-primary"></td>
													<td></td>
													<td>
														<a class="btn btn-success btn-sm" href="transaksi_detail.php">Detail</a>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td></td>
													<td></td>
													<td></td>
													<td class="text-primary"></td>
													<td></td>
													<td>
														<a class="btn btn-success btn-sm" href="transaksi_detail.php">Detail</a>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td></td>
													<td></td>
													<td></td>
													<td class="text-primary"></td>
													<td></td>
													<td>
														<a class="btn btn-success btn-sm" href="transaksi_detail.php">Detail</a>
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td></td>
													<td></td>
													<td></td>
													<td class="text-primary"></td>
													<td></td>
													<td>
														<a class="btn btn-success btn-sm" href="transaksi_detail.php">Detail</a>
													</td>
												</tr>
												<tr>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Content -->

					<!-- Pagination -->
					<nav aria-label="pagination">
						<ul class="pagination justify-content-center">
							<li class="page-item disabled"><span class="page-link">Previous</span></li>
							<li class="page-item active"><span class="page-link">1 <span class="sr-only">(current)</span></span></li>
							<li class="page-item">
								<a class="page-link" href="#">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">5</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- End Pagination -->
		</div>
	</div>
</body>
</html>
