<?php
	$page = 'Admin';
	include 'core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';

	include_once 'api/config/database.php';
    
    $database = new Database();
    $db = $database->getConnection();
?>

			<!-- Content -->
			<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">Edit Admin</h4>
								</div>
								<div class="card-body">
									<form>
										<div class="form-group">
											<label>Masukkan ID</label> <input class="form-control" placeholder="your ID" type="text">
										</div>
										<div class="form-group">
											<label>Masukkan Password</label> <input class="form-control" placeholder="your password" type="text">
										</div>
										<div class="form-group">
											<label>Masukkan Nama</label> <input class="form-control" placeholder="your name" type="text">
										</div>
										<div class="form-group">
											<label>Masukkan Email</label> <input class="form-control" placeholder="your email" type="text">
										</div>
									</form><a class="btn btn-primary pull-right" href="admin.php">Save</a>
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
