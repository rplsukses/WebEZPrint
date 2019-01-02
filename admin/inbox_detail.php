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
						$ambil=$conn->query("SELECT * FROM inbox, user 
						WHERE id_inbox='$_GET[id]' AND inbox.id_user=user.id_user");
						$pecah= $ambil->fetch_assoc();
					?>
					<div class="card-header card-header-primary">
						<h4 class="card-title"><?php echo $pecah['email'] ?></h4>
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
									<td>Tanggal : <?php echo $pecah['tanggal_kirim']?></td>
								</tr>
								</thead>
								<thead class="text-primary">
								<tr>
									<td>Pesan : </td>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td><?php echo $pecah['pesan']?></td>
								</tr>
								</tbody>
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
							<label for="exampleFormControlInput1">To :</label>
							<input class="form-control" placeholder="your name" type="text" name="email" value="<?php echo $pecah['email']?>">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Message :</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="balasan"></textarea>
						</div>
						<input class="btn btn-primary center-block pull-right" type="submit" name="send" value="SEND">
					</form>
					<?php
					if (isset($_POST['send'])){
						$email_user = $_POST['email'];
						$balasan = $_POST['balasan'];

						$conn->query("INSERT INTO outbox VALUES ('','$email_user', '$balasan')");

						echo "<script>alert('Data sucessfully saved !');</script>";
						echo "<script>location='inbox.php';</script>";
					}
					?>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- End Content -->
</body>
</html>