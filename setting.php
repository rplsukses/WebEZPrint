<?php
    include 'admin/api/config/database.php';
    include 'admin/core/init.php';
    include 'include/header.php';

    // Session
    session_start();
    if(!isset($_SESSION['login_mitra'])) {
        header('location:index.php');
    }else {
        $login_mitra = $_SESSION['login_mitra'];
    }

    //Query Select
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id_mitra=$_GET['id'];
        $ambil=$conn->query("SELECT * FROM mitra WHERE id_mitra='$_GET[id]'");
        $pecah=$ambil->fetch_assoc();
    }
?>

<!--Content-->
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
                                <h1><a href="#" title="Dreri">Edit Profile</a></h1>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <div class="menu text-right hidden-sm hidden-xs">  
                            </div>
                        </div>
                    </div>
                    <div class="responsive-menu text-right visible-xs visible-sm">
                        <a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="services"> 
        <div>
            <div class="title-section text-center"></div>
                <div class="container lead">
                    <div class="col-md-12">
                        <form enctype="multipart/form-data" method="POST">
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

                        //Query Edit Profile
                        <?php
                            if (isset($_POST['save'])){
								$namafoto=$_FILES['foto']['name'];
								$lokasifoto=$_FILES['foto']['tmp_name'];
                                $nama=$_POST['nama'];
                                $alamat=$_POST['alamat'];
                                $email_mitra=$_POST['email'];
                                $telp_mitra=$_POST['no_telepon'];
                                $nama_pemilik=$_POST['nama_pemilik'];
                                $email_pemilik=$_POST['email_pemilik'];
                                $telp_pemilik=$_POST['telp_pemilik'];
                                $last_seen=$_POST['last_seen'];
                                
                                if ($namafoto != ''){
									move_uploaded_file($lokasifoto, "admin/api/upload/foto_mitra/$namafoto");
												
									$conn->query("UPDATE mitra SET nama='$nama', foto='$namafoto', alamat='$alamat', email='$email_mitra',
                                        no_telepon='$telp_mitra', nama_pemilik='$nama_pemilik', email_pemilik='$email_pemilik',
                                        telp_pemilik='$telp_pemilik', last_seen='$last_seen' 
                                        WHERE id_mitra='$_GET[id]'");

								} else {
									$conn->query("UPDATE mitra SET nama='$nama', alamat='$alamat', email='$email_mitra',
                                        no_telepon='$telp_mitra', nama_pemilik='$nama_pemilik', email_pemilik='$email_pemilik',
                                        telp_pemilik='$telp_pemilik', last_seen='$last_seen' 
                                        WHERE id_mitra='$_GET[id]'");
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
