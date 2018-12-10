<?php
<<<<<<< HEAD
	$page = 'Inbox';
	include 'core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';
<<<<<<< HEAD
<<<<<<< HEAD

	// include tabel database
	include_once 'api/objects/inbox.php';

	//include connect to database
	require_once 'core/init.php'; 
	include_once 'api/config/database.php'; 

	// instantiate database and product object
    $database = new Database();
    $db = $database->getConnection();
=======
=======
>>>>>>> 282a541a58326c1dc9ba7640c85220f2d82f3271
=======
	include_once 'api/config/database.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';
    $database = new Database();
    $db = $database->getConnection();
>>>>>>> mitra-new
<<<<<<< HEAD
>>>>>>> 282a541a58326c1dc9ba7640c85220f2d82f3271
=======
>>>>>>> 282a541a58326c1dc9ba7640c85220f2d82f3271
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
											<?php $ambil=$conn->query("SELECT * FROM inbox"); ?>
											<?php while($pecah = $ambil->fetch_assoc()){ ?>
												<tr>
													<td>
														<div class="checkbox">
															<input type="checkbox">
														</div>
													</td>
													<td><a href="inbox_detail.php"><?php echo $pecah['email_pengirim']?></a></td>
													<td><?php echo $pecah['subjek']?></td>
													<td><?php echo $pecah['tanggal_kirim']?></td>
												</tr>
												<?php } ?>
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
