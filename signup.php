<?php
    include 'admin/api/config/database.php';
    include 'admin/core/init.php';
    include 'include/header.php';

    $conn = mysqli_connect("localhost","u623212174_root","rplsukses","u623212174_print");
    if (isset($_POST['signup'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp_kantor=$_POST['no_telepon'];
        $email = $_POST['email'];
        $nama_pemilik=$_POST['nama_pemilik'];
        $telp_pemilik=$_POST['telp_pemilik'];
        $email_pemilik=$_POST['email_pemilik'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        if ($password == $password2) {
            mysqli_query($conn, "INSERT INTO mitra (nama,alamat,no_telepon,email,nama_pemilik,telp_pemilik,email_pemilik,password) 
                                 VALUES ('$nama','$alamat','$telp_kantor','$email','$nama_pemilik','$telp_pemilik','$email_pemilik',md5('$password'))");
					echo "<script>alert('Anda telah terdaftar sebagai mitra , silahkan log in');</script> <meta http-equiv='refresh' content='1;url=index.php'>";
        }
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
                            <a href="index.php"><img src="images/logoo2.png" width="280px" height="50px"></a>                           
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
                                <h1 text align="center"><a href="#" title="Dreri">Sign Up Mitra </a></h1>
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
    
    <div id="contact" class="section-cotent">
        <div class="container">
            <div class="row-center">
			<div class="col-md-3"> </div>
                <div class="col-md-6 col-sm-6">
                    <div class="contact-form">
                    <form action="" method="POST">
					 <p class="full-row">
                        </p>
                        <p class="full-row">
                            <label for="name-id">Nama Mitra :</label>
                            <input type="text" id="name-id" name="nama">
                        </p>
						<p class="full-row">
                            <label for="name-id">Alamat Mitra :</label>
                            <input type="text" id="name-id" name="alamat">
                        </p>
                        <p class="full-row">
                            <label for="name-id">Nomor Telepon Kantor :</label>
                            <input type="text" id="name-id" name="no_telepon">
                        </p>
                        <p class="full-row">
                            <label for="email-id">Email:</label>
                            <input type="text" id="email-id" name="email">
                        </p>
                        <p class="full-row">
                            <label for="name-id">Nama Pemilik :</label>
                            <input type="text" id="name-id" name="nama_pemilik">
                        </p>
                        <p class="full-row">
                            <label for="name-id">Nomor Telepon Pemilik :</label>
                            <input type="text" id="name-id" name="telp_pemilik">
                        </p>
                        <p class="full-row">
                            <label for="name-id">Email Pemilik :</label>
                            <input type="text" id="name-id" name="email_pemilik">
                        </p>
						 <p class="full-row">
                            <label for="email-id">Password :</label>
                            <input type="password" id="email-id" name="password">
                        </p>
                        <p class="full-row">
                            <label for="email-id">Konfirmasi Password :</label>
                            <input type="password" id="email-id" name="password2">
                        </p>
                        <input class="mainBtn" type="submit" name="signup" value="Sign Up">
                        </form>
                    </div>
                </div> 
				<div class="col-md-3"> </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#contact -->

<?php
    include 'include/footer.php';
?>

</body>
</html>
