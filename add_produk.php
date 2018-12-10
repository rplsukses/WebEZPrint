<?php
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'include/footer.php';

    if(isset($_POST['add'])){
        $id_kategori = $_POST['id_kategori'];
        $ukuran = $_POST['ukuran'];
        $warna = $_POST['warna'];
        $bahan = $_POST['bahan'];
        $harga = $_POST['harga'];
        $query = "INSERT INTO produk 
                (id_mitra, id_kategori, ukuran, warna, bahan, harga)
                 VALUES ('1','$id_kategori','$ukuran', '$warna', '$bahan', '$harga')";
        $result = mysqli_query($conn, $query);
        if($result){
            header('Location: produk.php');
        } else {
            echo "<p>Error: " . $query . "<br>" . mysqli_error($conn). "</p>";
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
                                <h1><a href="#" title="Dreri"> ADD PRODUK</a></h1>
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
                        <input class="btn btn-warning pull-right" type="submit" value="ADD" name="add"/>
                        </form>
                        

                               
                    </div>
               
                    <!-- End Content -->
              
      </div>
    </div>
          
    </div> <!-- /.row -->
        </div> <!-- /.container -->
            </div> <!-- /#services -->



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

</body>
</html>