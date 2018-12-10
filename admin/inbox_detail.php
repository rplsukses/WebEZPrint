<?php
<<<<<<< HEAD
<<<<<<< HEAD
	$page = 'Inbox';
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
									<h4 class="card-title"><?php ?></h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table cellspacing="0" class="table" id="dtBasicExample" width="100%">
											<thead class=" text-primary">
												<tr>
													<th>Subjek : </th>
													<th>Tanggal :</th>
												</tr>
											</thead>
										</table>
										<table cellspacing="0" class="table" id="dtBasicExample" width="100%">
											<thead class=" text-primary">
												<tr>
													<th>Pesan :</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>You Can't Stop Me Loving Myself</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title">Replay</h4>
						</div>
						<div class="card-body">
							<form>
								<div class="form-group">
									<label for="exampleFormControlInput1">To :</label> <input class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" type="email">
								</div>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Message :</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
							</form><button class="btn btn-primary center-block pull-right" type="button">Send</button>
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
