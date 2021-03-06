<?php
	$page = 'Admin';
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
						<a href="add_admin.php"><button type="submit" class="btn btn-primary pull-right">Add</button></a>
					</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">Tabel Admin</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table cellspacing="0" class="table" id="dtBasicExample" width="100%">
											<thead class="text-primary">
												<tr>
													<th>No.</th>
													<th>Nama</th>
													<th>Email</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $nomor=1; ?>
												<?php $ambil=$conn->query("SELECT * FROM admin"); ?>
												<?php while ($pecah=$ambil->fetch_assoc()){ ?>
												<tr>
													<td><?php echo $nomor ?></td>
													<td><?php echo $pecah['nama']; ?></td>
													<td><?php echo $pecah['email']; ?></td>
													<td>
														<a href="edit_admin.php?id=<?php echo $pecah['id_admin']; ?>" class="btn btn-warning btn-sm">Edit</a>
														<a href="delete_admin.php?id=<?php echo $pecah['id_admin']; ?>" class="btn btn-danger btn-sm">Delete</a>
													</td>
												</tr>
												<?php $nomor++; ?>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- End Content -->
</body>
</html>
