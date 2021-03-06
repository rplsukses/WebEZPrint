<?php
	$page = 'Kategori';
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
								<h4 class="card-title">Tambah Kategori</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<form enctype="multipart/form-data" method="post">
										<div class="form-group">
											<label>Nama</label> <input class="form-control" name="nama" type="text">
										</div>
										<div class="form-group">
											<label>Icon</label>
										</div>
										<input class="form-control" name="icon" type="file">
										<p align="right">
											<button class="btn btn-primary" name="add">Add</button>
											<button class="btn btn-warning" name="cancel">Cancel</button>
										</p>
										</form>
									</div>
								</div>
								
								<?php
									//Query Input Data Add Kategori 
									if (isset($_POST['add'])){
										$namafoto=$_FILES['icon']['name'];
										$lokasi=$_FILES['icon']['tmp_name'];
										$nama=$_POST['nama'];

										move_uploaded_file($lokasi, "api/upload/kategori/".$namafoto);

										$conn->query("INSERT INTO kategori (nama, icon) VALUES ('$nama', '$namafoto')");

										echo "<script>alert('Data succesfully saved !');</script>";
										echo "<script>location='kategori.php';</script>";

									}else if (isset($_POST['cancel'])){
										echo "<script>location='kategori.php';</script>";
									}

								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	  <!-- End Content -->
</body>
</html>
