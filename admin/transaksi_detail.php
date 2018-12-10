<?php
<<<<<<< HEAD
<<<<<<< HEAD
	$page = 'Transaksi';
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
									<center><h3 class="card-title">Detail Transaksi</h3></center>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table">
											<thead class="text-primary">
												<tr>
													<th>ID Transaksi :</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>File :</td>
												</tr>
												<tr>
													<td>Jenis Produk :</td>
												</tr>
												<tr>
													<td>Tanggal Order :</td>
												</tr>
												<tr>
													<td>Tanggal Selesai :</td>
												</tr>
												<tr>
													<td>Total Harga :</td>
												</tr>
												<tr>
													<td>Status :</td>
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
		</div>
	</div>
</body>
</html>
