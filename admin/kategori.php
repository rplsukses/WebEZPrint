<?php
<<<<<<< HEAD
  $page ='Kategori';
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
       		<a href="add_kategori.php"><button type="submit" class="btn btn-primary pull-right">Add</button></a>
      		</div>
    		</div>
  		</div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">panorama</i>
                  </div>
                  <h3 class="card-title">Banner</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">create</i>
                    <a href="edit_kategori.php">Edit</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">file_copy</i>
                  </div>
                  <h3 class="card-title">Dokumen</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">create</i>
                    <a href="edit_kategori.php">Edit</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">insert_photo</i>
                  </div>
                  <h3 class="card-title">Foto</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">create</i>
                    <a href="edit_kategori.php">Edit</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">photo_album</i>
                  </div>
                  <h3 class="card-title">Poster</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">create</i>
                    <a href="edit_kategori.php">Edit</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">insert_emoticon</i>
                  </div>
                  <h3 class="card-title">Sticker</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">create</i>
                    <a href="edit_kategori.php">Edit</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">contact_mail</i>
                  </div>
                  <h3 class="card-title">ID Card</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">create</i>
                    <a href="edit_kategori.php">Edit</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">local_play</i>
                  </div>
                  <h3 class="card-title">Apa?</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">create</i>
                    <a href="edit_kategori.php">Edit</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">layers</i>
                  </div>
                  <h3 class="card-title">Brosur</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">create</i>
                    <a href="edit_kategori.php">Edit</a>
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
