<?php
	$page = 'Transaksi';

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
