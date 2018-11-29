<?php
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';

	//include connect to database
	require_once 'core/init.php'; 
    include_once 'api/config/database.php'; 
    include_once 'api/objects/mitra.php';
    include_once 'api/objects/produk.php';
	
	// session for login
    session_start();
    if(!isset($_SESSION['loginadmin'])) {
      header('location:login.php');
    }else {
      $loginadmin = $_SESSION['loginadmin'];
    }

    
    // instantiate database and product object
    $database = new Database();
    $db = $database->getConnection();
    
    //dashboard count admin
    $query = "SELECT * FROM admin";
    $result = mysqli_query($conn, $query);
    $numadmin = mysqli_num_rows($result);
    if($numadmin == null){
        $numadmin = 0;
    }

	//dashboard count user
    $query = "SELECT * FROM user";
    $result = mysqli_query($conn, $query);
    $numuser = mysqli_num_rows($result);
    if($numuser == null){
        $numuser = 0;
    }
    
    // initialize object for count dashboard
    $mitra = new Mitra($db);
    $produk = new Produk($db);
?>

<!-- Navbar -->
<body>
	<div class="main-panel">
		<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
			<div class="container-fluid">
				<div class="collapse navbar-collapse justify-content-end">
					<form class="navbar-form">
						<div class="input-group no-border">
							<input class="form-control" placeholder="Search..." type="text" value=""> <button class="btn btn-white btn-round btn-just-icon" type="submit"><i class="material-icons">search</i>
							<div class="ripple-container"></div></button>
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="index.php"><i class="material-icons">dashboard</i>
							<p class="d-lg-none d-md-block">Stats</p></a>
						</li>
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#pablo"><i class="material-icons">person</i>
							<p class="d-lg-none d-md-block">Account</p></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->
		
		<!-- Content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<a href="inbox.php">
						<div class="card card-stats">
							<div class="card-header card-header-warning card-header-icon">
								<div class="card-icon">
									<i class="material-icons">email</i>
								</div>
								<p class="card-category">Inbox</p>
								<h3 class="card-title">75 <small>Inbox</small></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">email</i> .....
								</div>
							</div>
						</div></a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<a href="transaksi.php">
						<div class="card card-stats">
							<div class="card-header card-header-success card-header-icon">
								<div class="card-icon">
									<i class="material-icons">assignment</i>
								</div>
								<p class="card-category">Transaksi</p>
								<h3 class="card-title">100</h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">date_range</i> .....
								</div>
							</div>
						</div></a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<a href="user.php">
						<div class="card card-stats">
							<div class="card-header card-header-danger card-header-icon">
								<div class="card-icon">
									<i class="material-icons">supervisor_account</i>
								</div>
								<p class="card-category">User</p>
								<h3 class="card-title"><?php echo $numuser;?> <small>User</small></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">local_offer</i> .....
								</div>
							</div>
						</div></a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<a href="mitra.php">
						<div class="card card-stats">
							<div class="card-header card-header-info card-header-icon">
								<div class="card-icon">
									<i class="material-icons">store_mall_directory</i>
								</div>
								<p class="card-category">Mitra</p>
								<h3 class="card-title"><?php echo $mitra->read()->rowCount();?> <small>Mitra</small></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">store_mall_directory</i> ....
								</div>
							</div>
						</div></a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<a href="kategori.php">
						<div class="card card-stats">
							<div class="card-header card-header-info card-header-icon">
								<div class="card-icon">
									<i class="material-icons">chrome_reader_mode</i>
								</div>
								<p class="card-category">Kategori</p>
								<h3 class="card-title">100</h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">chrome_reader_mode</i> .....
								</div>
							</div>
						</div></a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<a href="admin.php">
						<div class="card card-stats">
							<div class="card-header card-header-warning card-header-icon">
								<div class="card-icon">
									<i class="material-icons">person</i>
								</div>
								<p class="card-category">Admin</p>
								<h3 class="card-title"><?php echo $numadmin;?> <small>Orang</small></h3>
							</div>
							<div class="card-footer">
								<div class="stats">
									<i class="material-icons">person</i> .....
								</div>
							</div>
						</div></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Content -->

</body>
</html>