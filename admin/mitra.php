<?php $thisPage = "index";
    include 'header.php';
    include 'footer.php';
		include 'sidebar.php';
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
													<th>ID Mitra<i aria-hidden="true" class="fa fa-sort float-right"></i></th>
													<th class="th-sm">Nama <i aria-hidden="true" class="fa fa-sort float-right"></i></th>
													<th class="th-sm">Last Seen <i aria-hidden="true" class="fa fa-sort float-right"></i></th>
													<th>Profil</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>7381261</td>
													<td>Nova Print</td>
													<td>12.30</td>
													<td>
														<a class="btn btn-success btn-sm" href="mitra_detail.php">Detail</a>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>21848684</td>
													<td>Print Coy</td>
													<td>00.30</td>
													<td>
														<a class="btn btn-success btn-sm" href="mitra_detail.php">Detail</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Content -->

					<!-- pagination -->
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
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- End Pagination -->
		</body>
		</html>
