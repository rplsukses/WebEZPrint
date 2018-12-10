<?php
	include 'core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';
?>

			<!-- Content -->
			<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title">Edit Kategori</h4>
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
					<!-- End Content -->

				</div>
			</div>
		</div>
	</div>
</body>
</html>
