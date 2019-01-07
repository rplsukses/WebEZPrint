<?php
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'admin/api/config/database.php';

    // Session
    session_start();
    if(!isset($_SESSION['login_mitra'])) {
        header('location:index.php');
    }else {
        $login_mitra = $_SESSION['login_mitra'];
    }
    
    //Connect To Database
    $database = new Database();
    $db = $database->getConnection();

    //Query SELECT
    $result = mysqli_query($conn, "SELECT * FROM mitra WHERE id_mitra=".$_SESSION['user_id']);
    //$row =  mysqli_fetch_assoc($result);
?>

<!-- CONTENT -->
<body>
    <div id="home">
        <div class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="left-header lead">
                            <a href="welcome.php"><img src="images/logoo2.png" width="280px" height="50px"></a>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="text-center">
                            <div class="logo">
                                <h1 text align="center"><a href="#" title="Dreri">Profile Mitra </a></h1>
                            </div>
                        </div>                      
                    </div>
                    <div class="responsive-menu text-right visible-xs visible-sm">
                        <a href="#" class="toggle-menu fa fa-bars"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div id="about" class="section-cotent">
        <div class="container">
            <div class="row">
                <?php while($row=$result->fetch_assoc()) {?>
                <div class="our-team">
                    <div class="col-md-4 col-sm-6">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="admin/api/upload/foto_mitra/<?php echo $row['foto']; ?>" alt="Mary">
                                <div class="overlay">   
                                </div>
                            </div>
                            <div class="inner-content">
                                <h5 text align="center"><?php echo $row['nama'] ?></h5>
                            </div>
                        </div>
                    </div>
					<div class="col-md-8">
						<div class="table">
							<table class="table table-striped table-hover">                            
                            <a class="btn-primary btn-sm pull-right" href="setting.php?id=<?php echo $row['id_mitra'];?>">Edit Profile</a><br><br>
								<tbody class="h5">
									<tr >
										<td>Nama Mitra</td>
										<td>: </td>
										<td><?php echo $row['nama']; ?></td>
										<td> </td>
									</tr>
									<tr>
										<td>Alamat Mitra</td>
										<td>: </td>
										<td><?php echo $row['alamat']; ?></td>
										<td> </td>
									</tr>
                                    <tr>
										<td>Telepon Kantor</td>
										<td>: </td>
										<td><?php echo $row['no_telepon']; ?></td>
										<td> </td>
									</tr>
									<tr>
										<td>Email Kantor</td>
										<td>: </td>
										<td><?php echo $row['email']; ?></td>
										<td> </td>
									</tr>
									<tr>
										<td>Nama Pemilik</td>
										<td>: </td>
										<td><?php echo $row['nama_pemilik']; ?></td>
										<td> </td>
									</tr>
                                    <tr>
										<td>Telepon Pemilik  </td>
										<td>: </td>
										<td><?php echo $row['telp_pemilik']; ?></td>
										<td> </td>
									</tr>
                                    <tr>
										<td>Email Pemilik </td>
										<td>: </td>
										<td><?php echo $row['email_pemilik']; ?></td>
										<td> </td>
									</tr>
									<tr>
										<td>Last Seen </td>
										<td>: </td>
										<td><?php echo $row['last_seen']; ?></td>
										<td> </td>
									</tr>
                                    <?php }?>
                                </tbody>
					    	</table>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
<?php
    include 'include/footer.php';
?>
</body>
</html>
