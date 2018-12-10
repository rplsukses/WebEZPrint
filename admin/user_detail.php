<?php
<<<<<<< HEAD
<<<<<<< HEAD
  $page = 'User';
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
<<<<<<< HEAD
=======
=======
	include_once 'api/config/database.php';
    include 'include/header.php';
    include 'include/footer.php';
	include 'include/sidebar.php';
>>>>>>> 282a541a58326c1dc9ba7640c85220f2d82f3271
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
              <center><h3 class="card-title">Detail User</h3></center>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr>
                      <th>ID User :</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nama :</td>
                    </tr>
                    <tr>
                      <td>Password :</td>
                    </tr>
                    <tr>
                      <td>Telepon :</td>
                    </tr>
                    <tr>
                      <td>Email :</td>
                    </tr>
                    <tr>
                      <td>Last Seen :</td>
                    </tr>
										<tr>
											<td>Foto :</td>
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
	
</body>
</html>
