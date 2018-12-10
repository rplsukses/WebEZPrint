<?php
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'include/footer.php';

    //Query select produk by mitra
    $ambil=$conn->query("SELECT * FROM 
                     produk, kategori 
                     WHERE produk.id_mitra=1
                     AND produk.id_kategori=kategori.id_kategori
                     AND produk.arsip=0 ");

    // Query archieve produk
    if(isset($_GET['arsip']) && !empty($_GET['arsip'])){
        $id_produk = $_GET['arsip'];
        $query = "UPDATE produk SET arsip=1 WHERE id_produk=".$id_produk;
        $result = mysqli_query($conn, $query);
        // tambah notif atau apa
        header('location:produk.php');
        echo "<script>alert('produk diarchievkan');</script>";
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
                                <h1><a href="#" title="Dreri">PRODUK</a></h1>
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
    <div >
        <div class="container">
         <div > 
            </div> <!-- /.title-section -->
            <div class="row">
              <div class="card-body">
                       <div class="">
                        <a href="add_produk.php"><button type="submit" class="btn btn-warning btn-sm pull-right">Add</button></a>
                        <a class="btn-danger btn-sm" href="?arsip=<?php echo $pecah['id_produk'];?>">Unarchieve</a>
                    </div>
              <div class="table">
                <table class="table table-striped table-hover">
                  <thead class=" text-primary lead">
                    <h1>
                    <tr>
                         <th>ID Produk</th>
                         <th>Kategori</th>
                         <th>Ukuran</th>
                         <th>Warna</th>
                         <th>Bahan</th>
                         <th>Harga</th>
                         <th>Action</th>
                    </tr>
                </h1>
                  </thead>
                     <tbody class="h4">
                     <?php while($pecah = $ambil-> fetch_assoc()) { ?>
                        <tr >
                            <td><?php echo $pecah['id_produk']; ?></td>
                            <td><?php echo $pecah['nama']; ?></td>
                            <td><?php echo $pecah['ukuran']; ?></td>
                            <td><?php echo $pecah['warna']; ?></td>
                            <td><?php echo $pecah['bahan']; ?></td>
                            <td><?php echo $pecah['harga']; ?></td>
                            <td>
                                <a class="btn-warning btn-sm" href="edit_produk.php?id=<?php echo $pecah['id_produk'];?>">Edit</a> 
                                <a class="btn-danger btn-sm" href="?arsip=<?php echo $pecah['id_produk'];?>">Archieve</a>
                            </td>
                        </tr>
                     <?php } ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
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