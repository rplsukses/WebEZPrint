<?php
<<<<<<< HEAD
<<<<<<< HEAD
	$page = 'Mitra';
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
									<center>
										<h4 class="card-title">Detail Mitra</h4>
									</center>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table">
											<thead class="text-primary">
											<tr>
												<th>ID Mitra :</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Alamat :</td>
											</tr>
											<tr>
												<td>Telepon :</td>
											</tr>
											<tr>
												<td>Email :</td>
											</tr>
											<tr>
												<td>Owner :</td>
											</tr>
											<tr>
												<td>Telp. Owner :</td>
											</tr>
											<tr>
												<td>Email Owner :</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
            <div class="card-header card-header-primary">
							<center>
								<h4 class="card-title">Produk</h4>
							</center>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr>
											<th>ID Produk</th>
											<th>Kategori</th>
											<th>Jenis</th>
											<th>Ukuran</th>
											<th>Warna</th>
											<th>Bahan</th>
											<th>Harga</th>
                    </tr>
                  </thead>
									<tbody>
										<tr>
											<td>001</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>002</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr>
											<td>003</td>
											<td></td>
											<td></td>
											<td></td>
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
	<!-- End Pagination -->
</body>
</html>
