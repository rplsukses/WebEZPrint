<?php
    include_once 'admin/api/config/database.php';

    $database = new Database();
    $db = $database->getConnection();
?>
<!DOCTYPE html>
<!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <link href="images/logo.png" rel="print-icon" sizes="100x100">
    <link href="images/logo.png" rel="icon" type="image/png">
    <title>EZPrint Mitra Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Compass Template
    http://www.templatemo.com/tm-454-compass
    -->
    <meta charset="UTF-8">
	
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo-misc.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo-main.css">
        
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.js"></script>
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
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
                        <div class="">
                            <div class="logo">
                                <h1 align="center"><a href="#" title="Dreri">Selamat Datang di Fitur EZPrint Mitra Center</a></h1>
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

   
    </div>

    <div id="services" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
				<div class="title-section text-center"> </div>
                <h2>Halo Sobat EZPrint! </h2>
				<p> Di halaman Ini sobat EZPrint dapat mengatur produk , melacak transaksi , melihat profil serta mengedit profile dari akun Sobat EzPrint.</p>
               
            </div> <!-- /.title-section -->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fas fa-newspaper"></i>
                            <h3>Produk</h3>
                        </div>
                        <div class="service-description">
                            <a href="produk.php"><img src="images/prod.png" style="height: 150px; width: 150px;"></a>
                        </div>
                    </div> <!-- /.service-item --> 
                </div> <!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="far fa-credit-card"></i>
                            <h3>Transaksi</h3>
                        </div>
                        <div class="service-description">
                            <a href="transaksi.php"><img src="images/tran.png" style="height: 150px; width: 150px;"></a>
                        </div>
                        </div> <!-- /.service-item -->
                        </div> <!-- /.col-md-3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fas fa-user"></i>
                            <h3>Profile</h3>
                        </div>
                        <div class="service-description">
                           <a href="profile.php"><img src="images/prof.png" style="height: 150px; width: 150px;"></a>
                        </div>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
        </div> <!-- /.container -->
    </div> <!-- /#services -->

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <p>Copyright &copy; 2018 EzPrint</p>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="go-top">
                      
                    </div>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

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
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>

</body>
</html>