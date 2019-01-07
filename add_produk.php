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

    //Connec To Database
    $database = new Database();
    $db = $database->getConnection();

    //Query Add Produk
    if(isset($_POST['add'])){
        $id_kategori = $_POST['id_kategori'];
        $ukuran = $_POST['ukuran'];
        $warna = $_POST['warna'];
        $bahan = $_POST['bahan'];
        $harga = $_POST['harga'];
        $query = "INSERT INTO produk 
                (id_mitra, id_kategori, ukuran, warna, bahan, harga)
                 VALUES (".$_SESSION['user_id'].
                 ",'$id_kategori','$ukuran', '$warna', '$bahan', '$harga')";
        $result = mysqli_query($conn, $query);

        if($result){
            header('Location: produk.php?status=0');
        } else {
            echo "<p>Error: " . $query . "<br>" . mysqli_error($conn). "</p>";
        }
    }
?>

<!-- Content -->
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
                                <h1><a href="#" title="Dreri"> ADD PRODUK</a></h1>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <div class="menu text-right hidden-sm hidden-xs">   </div>
                        </div>
                    </div>
                    <div class="responsive-menu text-right visible-xs visible-sm">
                        <a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="services"> 
        <div>
            <div class="title-section text-center"></div>
                <div class="container lead">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="">                  
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
                                        <input type="text" name="ukuran" class="form-control" id="colFormLabel" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Warna</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="warna" class="form-control" id="colFormLabel" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Bahan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="bahan" class="form-control" id="colFormLabel" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="harga" class="form-control" id="colFormLabel" value="">
                                    </div>
                                </div>
                                <p align="right">
                                    <input class="btn btn-primary" type="submit" value="ADD" name="add"/>
                                    <a href="produk.php?status=0" class="btn btn-danger">Cancel</a>
                                </p>
                            </form>           
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