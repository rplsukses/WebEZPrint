<?php
	$page = 'Inbox';
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
				<div class="col-md-6">
					<div class="card">
					<?php
						//Query to get id 
						$ambil=$conn->query("SELECT * FROM inbox WHERE id_inbox='$_GET[id]'");
						$pecah= $ambil->fetch_assoc();
					?>
					<div class="card-header card-header-primary">
						<h4 class="card-title"><?php echo $pecah['email_pengirim'] ?></h4>
					</div>
						<div class="card-body">
							<div class="table-responsive">
								<table cellspacing="0" class="table" id="dtBasicExample" width="100%">
								<thead>
								<tr>
									<td>Subjek : <?php echo $pecah['subjek']?></td>
								</tr>
								</thead>
								<thead>
								<tr>
									<b><td>Tanggal : <?php echo $pecah['tanggal_kirim']?></td></b>
								</tr>
								</thead>
								<thead>
									<tr>
										<th>Pesan : </th>
									</tr>
									<tr>
										<td><?php echo $pecah['pesan']?></td>
									<tr>
								</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
			<div class="col-md-6">
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
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
						</div>
						<button class="btn btn-primary center-block pull-right" type="button">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- End Content -->
</body>
</html>