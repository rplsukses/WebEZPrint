<?php
    include 'admin/api/config/database.php';
    include 'admin/core/init.php';
    include 'include/header.php';

    //Query Select
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id_mitra=$_GET['id'];
        $ambil=$conn->query("SELECT * FROM mitra WHERE id_mitra='$_GET[id]'");
        $pecah=$ambil->fetch_assoc();
    }
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
                                <h1><a href="#" title="Dreri">Edit Profile</a></h1>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-4 -->
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <div class="menu text-right hidden-sm hidden-xs">
                                
                            </div> <!-- /.menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                    <div class="responsive-menu text-right visible-xs visible-sm">
                        <a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
                        </div> <!-- /.menu -->
                    </div> <!-- /.responsive-menu -->
                </div> <!-- /.container -->
            </div> <!-- /.header -->
        </div> <!-- /.site-header -->
    </div> <!-- /#home -->
    <div id="services"> 
        <div>
            <div class="title-section text-center">
               
            </div> <!-- /.title-section -->
                <div class="container lead">
                        <div class="col-md-12">
                        <form action="" method="POST">
                          <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Mitra</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="colFormLabel" value="<?php echo $pecah['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat Mitra</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" class="form-control" id="colFormLabel" value="<?php echo $pecah['alamat']; ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Telepon Kantor</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_telepon" class="form-control" id="colFormLabel" value="<?php echo $pecah['no_telepon']; ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email Kantor</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" id="colFormLabel" value="<?php echo $pecah['email']; ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Pemilik</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_pemilik" class="form-control" id="colFormLabel" value="<?php echo $pecah['nama_pemilik']; ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Telepon Pemilik</label>
                            <div class="col-sm-10">
                                <input type="text" name="telp_pemilik" class="form-control" id="colFormLabel" value="<?php echo $pecah['telp_pemilik']; ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email Pemilik</label>
                            <div class="col-sm-10">
                                <input type="text" name="email_pemilik" class="form-control" id="colFormLabel" value="<?php echo $pecah['email_pemilik']; ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Last Seen</label>
                            <div class="col-sm-10">
                                <input type="date" name="last_seen" class="form-control" id="colFormLabel" value="<?php echo $pecah['last_seen']; ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Foto Profil</label>
                            <div class="col-sm-10">
                            <input class="form-control" name="foto" type="file">
                            </div>
                        </div>
                        <p align="right">
                        <input class="btn btn-primary" type="submit" value="SAVE" name="save"/>
                        <a class="btn btn-danger" href="profile.php">Cancel</a>
                        </p>
                        </form>
                        <?php
										if (isset($_POST['save']))
										{
											$namafoto=$_FILES['foto']['name'];
											$lokasifoto=$_FILES['foto']['tmp_name'];
                                            $nama=$_POST['nama'];


											if ($namafoto != ''){
												move_uploaded_file($lokasifoto, "admin/api/upload/foto_mitra/$namafoto");
												
												$conn->query("UPDATE mitra SET nama='$nama', foto='$namafoto' WHERE id_mitra='$_GET[id]'");

											} else {
												$conn->query("UPDATE mitra SET nama='$nama' WHERE id_mitra='$_GET[id]'");
											}

											echo "<script>alert('Data was updated succesfully !');</script>";
											echo "<script>location='profile.php';</script>";
										}else if (isset($_POST['cancel'])){
											echo "<script>location='profile.php';</script>";
										}
										?>

                    </div>     
                    </div>

    <?php
        include 'include/footer.php';
    ?>

</body>
</html>
