<?php
	//name page
	$page = 'Kategori';

	include 'core/init.php'; //include connection to database
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

	//Query to get id kategori
	$ambil=$conn->query("SELECT * FROM kategori WHERE id_kategori='$_GET[id]'");
	$pecah=$ambil->fetch_assoc();
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
											<label>Nama</label>
											<input class="form-control" name="nama" type="text" value=<?php echo $pecah['nama']; ?> required>
										</div>
										<div class="form-group">
											<label>Icon</label>
										</div>
											<input class="form-control" name="icon" type="file">
											<button class="btn btn-primary pull-right" name="save">Save</button>
											<button class="btn btn-primary pull-right" name="cancel">Cancel</button>
									</form>
									<?php
										if (isset($_POST['save']))
										{
											$namafoto=$_FILES['icon']['name'];
											$lokasifoto=$_FILES['icon']['tmp_name'];
											$nama=$_POST['nama'];

											if ($namafoto != ''){
												move_uploaded_file($lokasifoto, "api/upload/kategori/$namafoto");
												
												$conn->query("UPDATE kategori SET nama='$nama', icon='$namafoto' WHERE id_kategori='$_GET[id]'");

											} else {
												$conn->query("UPDATE kategori SET nama='$nama' WHERE id_kategori='$_GET[id]'");
											}

											echo "<script>alert('Data was updated succesfully !');</script>";
											echo "<script>location='kategori.php';</script>";
										}else if (isset($_POST['cancel'])){
											echo "<script>location='kategori.php';</script>";
										}
										?>
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
