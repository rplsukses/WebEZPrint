<?php
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';
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
								<a class="nav-link" href="index.php"><i class="material-icons">dashboard</i>
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
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="inbox.php">
							<div class="card card-stats">
								<div class="card-header card-header-warning card-header-icon">
									<div class="card-icon">
										<i class="material-icons">email</i>
									</div>
									<p class="card-category">Inbox</p>
									<h3 class="card-title">75 <small>Inbox</small></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">email</i> .....
									</div>
								</div>
							</div></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="transaksi.php">
							<div class="card card-stats">
								<div class="card-header card-header-success card-header-icon">
									<div class="card-icon">
										<i class="material-icons">assignment</i>
									</div>
									<p class="card-category">Transaksi</p>
									<h3 class="card-title">100</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">date_range</i> .....
									</div>
								</div>
							</div></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="user.php">
							<div class="card card-stats">
								<div class="card-header card-header-danger card-header-icon">
									<div class="card-icon">
										<i class="material-icons">supervisor_account</i>
									</div>
									<p class="card-category">User</p>
									<h3 class="card-title">500 <small>User</small></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> .....
									</div>
								</div>
							</div></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="mitra.php">
							<div class="card card-stats">
								<div class="card-header card-header-info card-header-icon">
									<div class="card-icon">
										<i class="material-icons">store_mall_directory</i>
									</div>
									<p class="card-category">Mitra</p>
									<h3 class="card-title">100 <small>Mitra</small></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">store_mall_directory</i> ....
									</div>
								</div>
							</div></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="kategori.php">
							<div class="card card-stats">
								<div class="card-header card-header-info card-header-icon">
									<div class="card-icon">
										<i class="material-icons">chrome_reader_mode</i>
									</div>
									<p class="card-category">Kategori</p>
									<h3 class="card-title">100</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">chrome_reader_mode</i> .....
									</div>
								</div>
							</div></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="admin.php">
							<div class="card card-stats">
								<div class="card-header card-header-warning card-header-icon">
									<div class="card-icon">
										<i class="material-icons">person</i>
									</div>
									<p class="card-category">Admin</p>
									<h3 class="card-title">3 <small>Orang</small></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">person</i> .....
									</div>
								</div>
							</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- End Content -->

</body>
</html>
