<?php
    include 'admin/api/config/database.php';
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
    session_start();
    $database = new Database();
    $db = $database->getConnection();

    //QUERY SELECT
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id_produk=$_GET['id'];
        $query = ("SELECT * FROM produk, kategori
                 WHERE produk.id_produk=".$id_produk."
                 AND kategori.id_kategori=produk.id_kategori
                 LIMIT 0,1");
        $result = mysqli_query($conn, $query);
    }

    //QUERY POST
    if(isset($_POST['save'])){
        $id_kategori = $_POST['id_kategori'];
        $ukuran = $_POST['ukuran'];
        $warna = $_POST['warna'];
        $bahan = $_POST['bahan'];
        $harga = $_POST['harga'];
        $query = "UPDATE produk
                SET produk.id_kategori=".$id_kategori.", 
                ukuran='".$ukuran."', 
                warna='".$warna."', 
                bahan='".$bahan."', 
                harga='".$harga."' 
                WHERE produk.id_produk=".$id_produk;

    
        $update = mysqli_query($conn, $query);
        if($update){
            header('Location: produk.php?status=0');
        }else{
            echo "<p>Error: " . $query . "<br" . mysqli_error($conn). "</p>";
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
                                <h1><a href="#" title="Dreri"> EDIT PRODUK</a></h1>
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
         
            <div class="row">
              
                        
              <!-- Content -->
                   <div class="col-md-12">
                        <form action="" method="POST">
                        <?php
                            while($row=$result->fetch_assoc()){
                        ?>
                          <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Produk</label>
                            <div class="col-sm-10">
                                <input type="text" name="id_produk" class="form-control" id="colFormLabel" value="<?=$row['id_produk'];?>"  disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="col-sm-12" name="id_kategori">
                                <?php 
                                // QUERY KATEGORY
                                $query_kat = "SELECT * FROM kategori";
                                $kategori = mysqli_query($conn, $query_kat);
                                while($row_kat = $kategori->fetch_assoc()){
                                ?>
                                <option name="id_kategori" value="<?=$row_kat['id_kategori']?>"><?=$row_kat['nama'];?></option>
                                <?php
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Ukuran</label>
                            <div class="col-sm-10">
                                <input type="text" name="ukuran" class="form-control" id="colFormLabel" value="<?=$row['ukuran'];?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Warna</label>
                            <div class="col-sm-10">
                                <input type="text" name="warna" class="form-control" id="colFormLabel" value="<?=$row['warna'];?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Bahan</label>
                            <div class="col-sm-10">
                                <input type="text" name="bahan" class="form-control" id="colFormLabel" value="<?=$row['bahan'];?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="number" name="harga" class="form-control" id="colFormLabel" value="<?=$row['harga'];?>" >
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <input class="btn btn-primary pull-right" type="submit" value="SAVE" name="save"/>
                        </form> 

                               
                    </div>
               
                    <!-- End Content -->
              
      </div>
    </div>
          
    </div> <!-- /.row -->
        </div> <!-- /.container -->
            </div> <!-- /#services -->

<!-- coba -->

     <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <p>Copyright &copy; 2018 EzPrint</p>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-4 col-sm-4 col-xs-12">
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