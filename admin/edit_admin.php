<?php
	//name page
	$page = 'Admin';

	//include
	include 'core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';

	//Query to get id admin
	$ambil=$conn->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
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
								<h4 class="card-title">Edit Admin</h4>
							</div>
							<div class="card-body">
								<form method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label>Masukkan Nama</label>
										<input class="form-control" placeholder="your ID" type="text" name="nama_admin" value="<?php echo $pecah['nama']; ?>" required>
									</div>
									<div class="form-group">
										<label>Masukkan Password</label>
										<input class="form-control" placeholder="your password" type="password" name="pass_admin" value="<?php echo $pecah['password']; ?>" required><br>
										<input type="checkbox" onclick="showPass()">Show Password
									</div>
									<div class="form-group">
										<label>Masukkan Email</label>
										<input class="form-control" placeholder="your name" type="text" name="email_admin" value="<?php echo $pecah['email']; ?>">
									</div>
									<button class="btn btn-primary pull-right" name="simpan">Save</button>
									<button class="btn btn-primary pull-right" name="cancel">CANCEL</button>
									</form>

									<?php
										if (isset($_POST['simpan']))
										{
											$nama=$_POST['nama_admin'];
											$password=md5($POST['pass_admin']);
											$email=$POST['email_admin'];

											$conn->query("UPDATE admin SET nama='$nama', password='$password', email='$email' WHERE id_admin='$_GET[id]'");

											echo "<script>alert('Data was updated succesfully !');</script>";
											echo "<script>location='admin.php';</script>";
										} else if (isset($_POST['cancel'])){
											echo "<script>location='admin.php';</script>";
										}
									?>

									<script>
										function showPass(){
											var x = document.getElementById("pass");
											if (x.type === "password"){
												x.type = "text";
											}else{
												x.type = "password";
											}
										}
									</script>
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
