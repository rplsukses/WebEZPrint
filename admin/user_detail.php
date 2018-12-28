<?php
  $page = 'User';
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
  
  //Query to get id 
	$ambil=$conn->query("SELECT * FROM user WHERE id_user='$_GET[id]'");
	$pecah= $ambil->fetch_assoc();
?>


<!-- Content -->
<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-primary">
              <center><h3 class="card-title">Detail User</h3></center>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <td>Nama : <?php echo $pecah['nama']; ?></td>
                    </tr>
                    <tr>
                      <td>Telepon : <?php echo $pecah['telepon'];?></td>
                    </tr>
                    <tr>
                      <td>Email : <?php echo $pecah['email'];?></td>
                    </tr>
                    <tr>
                      <td>Last Seen : <?php echo $pecah['last_seen'];?></td>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-primary">
              <center><h3 class="card-title">Foto User</h3></center>
            </div>
            <div class="card-body">
            <center><img src="icon/<?php echo $pecah['foto']; ?>" width="210" height="210"></center>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Content -->
	
</body>
</html>
