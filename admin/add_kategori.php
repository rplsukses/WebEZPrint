<?php
<<<<<<< HEAD
<<<<<<< HEAD
	$page = 'Kategori';
=======
<<<<<<< HEAD
>>>>>>> 282a541a58326c1dc9ba7640c85220f2d82f3271
=======
>>>>>>> 282a541a58326c1dc9ba7640c85220f2d82f3271
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

			<!-- Content -->
			<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">Tambah Kategori</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<form enctype="multipart/form-data" method="post">
											<div class="form-group">
												<label>ID</label> <input class="form-control" name="id" type="number">
											</div>
											<div class="form-group">
												<label>Nama</label> <input class="form-control" name="nama" type="text">
											</div>
											<div class="form-group">
												<label>Icon</label>
											</div>
											<input class="form-control" name="icon" type="file">
										</form>
										<table cellspacing="0" class="table" id="dtBasicExample" width="100%"></table>
									</div>
									<button class="btn btn-primary pull-right" name="save">Save</button>
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
