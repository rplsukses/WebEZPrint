<?php

	$page = 'Admin';
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
								<h4 class="card-title">Tambah Admin</h4>
							</div>
							<div class="card-body">
								<form method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label>Masukkan Nama</label>
										<input class="form-control" placeholder="your name" type="text" name="nama" required>
									</div>
									<div class="form-group">
										<label>Masukkan Password</label>
										<input class="form-control" placeholder="your password" type="password" name="password" id="pass" required><br>
										<input type="checkbox" onclick="showPass()">Show Password
									</div>
									<div class="form-group">
										<label>Masukkan Email</label>
										<input class="form-control" placeholder="your email" type="email" name="admin_email" required>
									</div>
										<input class="btn btn-primary pull-right" type="submit" name="tambah" value="ADD">
									</form>
									
									<?php
									//QUERY INPUT DATA ADD ADMIN
									if (isset($_POST['tambah'])){
										$nama= $_POST['nama'];
										$password= md5($_POST['password']);
										$email= $_POST['admin_email'];

										$conn->query("INSERT INTO admin VALUES ('','$nama', '$password', '$email')");

										echo "<script>alert('Data sucessfully saved !');</script>";
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
	</body>
</html>