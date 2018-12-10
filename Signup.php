<<<<<<< HEAD
<?php
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
?>
=======
<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <link href="images/logoo2.png" rel="print-icon" sizes="100x100">
    <link href="images/logoo2.png" rel="icon" type="image/png">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <meta charset="UTF-8">

    <!-- CSS Bootstrap & Custom -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo-misc.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo-main.css">
        
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.js"></script>
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'> </div>
    <![endif]-->
</head>
>>>>>>> mitra-new
<body>
    
    <div id="home">
        <div class="site-header">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="left-header lead">
                               <img src="images/logo.png" width="30px" height="30px"><a href="index.html"></a>
                                <span>EZPrint Mitra Center</span>                              
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
                            <label for="email-id">Email:</label>
                            <input type="text" id="email-id" name="email">
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

    $conn = mysqli_connect("localhost","root","","u623212174_print");
    if (isset($_POST['signup'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        if ($password == $password2) {
            mysqli_query($conn, "INSERT INTO mitra (nama, alamat, email, password) VALUES ('$nama', '$alamat', '$email', md5('$password'))");
					echo "<script>alert('Anda telah terdaftar sebagai mitra , silahkan log in');</script> <meta http-equiv='refresh' content='1;url=index.php'>";
        }
    }
?>

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <p>Copyright &copy; EZPrint</p>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="go-top">
                        <a href="#" id="go-top">
                            <i class="fa fa-angle-up"></i>
                            Back to Top
                        </a>
                    </div>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

<<<<<<< HEAD
=======
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">

        function initialize() {
          var mapOptions = {
			  scrollwheel: false,
            zoom: 15,
            center: new google.maps.LatLng(13.758468,100.567481)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          document.body.appendChild(script);
        }
        window.onload = loadScript;
    </script>
>>>>>>> mitra-new
</body>
</html>