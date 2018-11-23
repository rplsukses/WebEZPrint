<?php
	include_once 'api/config/database.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';

    $database = new Database();
    $db = $database->getConnection();
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
								<a class="nav-link" href="inbox.php"><i class="material-icons">mail</i>
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
					<div class="row"
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">Inbox</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table cellspacing="0" class="table" id="dtBasicExample" width="100%">
											<thead class=" text-primary">
												<tr>
													<th>
														<div class="checkbox">
															<label><b><center>All<input type="checkbox" value=""></center></b></label>
														</div>
													</th>
													<th>Email Pengirim</th>
													<th>Subjek</th>
													<th>Tgl</i></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="checkbox">
															<input type="checkbox">
														</div>
													</td>
													<td><a href="inbox_detail.php">novarita10.nr@gmail.com</a></td>
													<td>Rahasia</td>
													<td>10/11/1999</td>
												</tr>
												<tr>
													<td>
														<div class="checkbox">
															<input type="checkbox">
														</div>
													</td>
													<td></td>
													<td></td>
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
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- End Pagination -->

		</body>
		</html>
