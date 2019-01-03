<?php
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
    include 'admin/api/config/database.php';
    session_start();
    $database = new Database();
    $db = $database->getConnection();

    //Query select produk by mitra
    $status=$_GET['status'];
    $query="SELECT * FROM 
                     produk, kategori 
                     WHERE id_mitra=".$_SESSION['user_id']."
                     AND produk.id_kategori=kategori.id_kategori
                     AND produk.arsip=".$status;
    $result = mysqli_query($conn, $query);

    // Query archieve produk
    if(isset($_GET['arsip']) && !empty($_GET['arsip'])){
        $id_produk = $_GET['arsip'];
        $query = "UPDATE produk SET arsip=1 WHERE id_produk=".$id_produk;
        $result = mysqli_query($conn, $query);
        // tambah notif atau apa
        echo "<script>alert('produk diarsipkan');</script>";
        header('location:produk.php?status=0');
        
    }

    //Query select archieve
    if(isset($_GET['unarsip']) && !empty($_GET['unarsip'])){
        $id_produk = $_GET['unarsip'];
        $query = "UPDATE produk SET arsip=0 WHERE id_produk=".$id_produk;
        $result = mysqli_query($conn, $query);
        // tambah notif atau apa
        echo "<script>alert('produk unarsip');</script>";
        header('location:produk.php?status=1');
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
                    <div class="col-md-12 col-sm-8">
                            <div class="responsive text-right hidden-sm hidden-xs">
                                <ul class="nav nav-pills">
                                    <li class="<?php if($status == 0) echo 'nav-item active';?>">
                                         <a class="nav-link" href="produk.php?status=0">Produk Mitra</a>
                                    </li>
                                    <li class="<?php if($status == 1) echo 'nav-item active';?>">
                                        <a class="nav-link" href="produk.php?status=1">Arsip produk</a>
                                    </li>
                                </ul>
                            </div>
                        </div>   
                        
                    
                    </div> <!-- /.row -->
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
                     <?php while($row=$result->fetch_assoc()) { ?>
                        <tr >
                            <td><?php echo $row['id_produk']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['ukuran']; ?></td>
                            <td><?php echo $row['warna']; ?></td>
                            <td><?php echo $row['bahan']; ?></td>
                            <td><?php echo $row['harga']; ?></td>
                            <td>
                            <?php if($status == 0) { ?>
                                <a href="edit_produk.php?id=<?php echo $row['id_produk'];?>" class="btn-warning btn-sm" >Edit</a> 
                                <a class="btn-danger btn-sm" href="produk.php?status=1&&arsip=<?php echo $row['id_produk'];?>">Arsipkan</a>
                            <?php }else{?>
                                <a class="btn-danger btn-sm" href="produk.php?status=0&&unarsip=<?php echo $row['id_produk'];?>">Unarsip</a>
                            <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php if($status == 0) { ?>
                    <a href="add_produk.php"><button type="submit" class="btn btn-primary btn-sm pull-right">Add Produk</button></a>               
                <?php } ?>
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