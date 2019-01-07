<?php
  $page ='Kategori';
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

<!-- Navbar -->
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
							<a class="nav-link" href="kategori.php"><i class="material-icons">chrome_reader_mode</i>
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
          <div class="col-md-12">
       		<a href="add_kategori.php" class="btn btn-primary pull-right">Add</a>
      		</div>
    		</div>
  		</div>
        <div class="container-fluid">
          <div class="row">
          <?php $ambil = $conn->query("SELECT * FROM kategori"); ?>
          <?php while ($pecah=$ambil->fetch_assoc()){?>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-icon">
                  <div class="card-icon">
                    <img src="api/upload/kategori/<?php echo $pecah['icon']; ?>" width="70" height="70">
                  </div>
                  <h4 class="card-title"><?php echo $pecah['nama'];?></h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    	<a href="edit_kategori.php?id=<?php echo $pecah['id_kategori']; ?>" class="btn btn-primary bt-sm">Edit</a>
											<a href="delete_kategori.php?id=<?php echo $pecah['id_kategori']; ?>" class="btn btn-danger bt-sm">Delete</a>				
									</div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
	  </div>
	</div>
  <!-- End Content -->
</body>
</html>