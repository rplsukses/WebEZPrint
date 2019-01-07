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

    //Connect To Database
    $database = new Database();
    $db = $database->getConnection();

    //QUERY SELECT TO EDIT PRODUK
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id_produk=$_GET['id'];
        $query = ("SELECT * FROM produk, kategori
                 WHERE produk.id_produk=".$id_produk."
                 AND kategori.id_kategori=produk.id_kategori
                 LIMIT 0,1");
        $result = mysqli_query($conn, $query);
    }

    //QUERY UPDATE PRODUK
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
                                <h1><a href="#" title="Dreri"> EDIT PRODUK</a></h1>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <div class="menu text-right hidden-sm hidden-xs">                            
                            </div>
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

                        <p align="right">
                            <input class="btn btn-primary" type="submit" value="SAVE" name="save"/>
                            <a class="btn btn-danger" href="produk.php?status=0">Cancel</a>
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