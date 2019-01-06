<?php
    include 'admin/core/init.php';
    include 'include/header.php';

    include 'admin/api/config/database.php';
    $database = new Database();
    $db = $database->getConnection();
?>

<body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
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
				<p><h5>Di halaman ini sobat EZPrint dapat mengatur produk , melacak transaksi , melihat profile serta mengedit profile dari akun Sobat EZPrint.</h5></p>
               
            </div> <!-- /.title-section -->
            <div class="row-center">
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fas fa-newspaper"></i>
                            <h3>Produk</h3>
                        </div>
                        <div class="service-description">
                            <a href="produk.php?status=0"><img src="images/prod.png" style="height: 150px; width: 150px;"></a>
                        </div>
                    </div> <!-- /.service-item --> 
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="far fa-credit-card"></i>
                            <h3>Transaksi</h3>
                        </div>
                        <div class="service-description">
                            <a href="transaksi.php?status=0"><img src="images/tran.png" style="height: 150px; width: 150px;"></a>
                        </div>
                        </div> <!-- /.service-item -->
                        </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fas fa-user"></i>
                            <h3>Profile</h3>
                        </div>
                        <div class="service-description">
                           <a href="profile.php"><img src="images/prod4.jpg" style="height: 150px; width: 150px;"></a>
                        </div>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fas fa-power-off"></i>
                            <h3>Logout</h3>
                        </div>
                        <div class="service-description">
                           <a href="logout.php"><img src="images/set1.png" style="height: 150px; width: 150px;"></a>
                        </div>
                    </div> <!-- /.service-item -->
                </div> <!-- /.col-md-3 -->
        </div> <!-- /.container -->
    </div> <!-- /#services -->
<?php
    include 'include/footer.php';
?>

    </body>
</html>