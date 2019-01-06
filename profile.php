<?php
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'admin/api/config/database.php';
    session_start();
    $database = new Database();
    $db = $database->getConnection();

    $result = mysqli_query($conn, "SELECT * FROM mitra WHERE id_mitra=".$_SESSION['user_id']);
    //$row =  mysqli_fetch_assoc($result);

        
?>

<body>
    
    <div id="home">
        <div class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="left-header lead">
                            <a href="welcome.php"><img src="images/logoo2.png" width="280px" height="50px"></a>                           
                            </div> <!-- /.left-header -->
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="text-center">
                            <div class="logo">
                                <h1 text align="center"><a href="#" title="Dreri">Profile Mitra </a></h1>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->                        
                    </div> <!-- /.row -->
                    <div class="responsive-menu text-right visible-xs visible-sm">
                        <a href="#" class="toggle-menu fa fa-bars"></a>
                       
                    </div> <!-- /.responsive-menu -->
                </div> <!-- /.container -->
            </div> <!-- /.header -->
        </div> <!-- /.site-header -->
    </div> <!-- /#home -->
    
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
                                </div> <!-- /.overlay -->
                            </div>
                            <div class="inner-content">
                               
                                <h5 text align="center"><?php echo $row['nama'] ?></h5>
								
                            </div>
                        </div> <!-- /.team-member -->
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
                                </body>
					    	</table>
						</div> <!-- /.col-md-3 -->
					</div>
                </div> <!-- /.our-team -->
                <?php }?>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#about -->
<?php
    include 'include/footer.php';
?>
</body>
</html>
