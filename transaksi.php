<?php
    include 'admin/api/config/database.php';
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
    session_start();
    $database = new Database();
    $db = $database->getConnection();

    //Query select transaksi
    $status=$_GET['status'];
    $query="SELECT transaksi.tgl_pesan, user.nama AS nama_user, transaksi.file, kategori.nama AS nama_kategori, produk.ukuran, produk.warna, produk.bahan, produk.harga
            FROM transaksi, user, produk, kategori
            WHERE transaksi.id_mitra=".$_SESSION['user_id']." 
            AND transaksi.status=".$status."
            AND user.id_user=transaksi.id_user 
            AND produk.id_produk=transaksi.id_produk 
            AND kategori.id_kategori=produk.id_kategori ";
    $result = mysqli_query($conn, $query);

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
                        <div class="col-md-8 col-sm-8 col-xs-6">
                            <div class="menu text-left hidden-sm hidden-xs">
                                <ul>
                                    <li><a href="#todo" class="current">Belum Diproses</a></li>
                                    <li><a href="#doing">Sudah Diproses</a></li>
                                    <li><a href="#done">Selesai</a></li>
                                    <li><a href="#cancel">Pembatalan</a></li>
                                   
                                </ul>
                            </div> <!-- /.menu -->
                        </div> <!-- /.col-md-8 -->
                    </div> <!-- /.row -->
                    <div class="responsive-menu text-left visible-xs visible-sm">
                        <a href="#" class="toggle-menu fa fa-bars"></a>
                        <div class="menu">
                            <ul>
                                <li><a href="" >Belum Diproses</a></li>
                                <li><a href="">Sudah Diproses</a></li>
                                <li><a href="">Selesai</a></li>
                                <li><a href="">Pembatalan</a></li>
                            </ul>
                        </div> <!-- /.menu -->
                    </div> <!-- /.responsive-menu -->
                </div> <!-- /.container -->
            </div> <!-- /.header -->
        </div> <!-- /.site-header -->
    </div> <!-- /#home -->
    <div id="services"> 
        <div class="container">
            <div class="col-md-12 col-sm-4 col-xs-4">           
                <table class="table table-striped table-hover" id="belumproses">
                    <thead class=" text-primary lead">
                        <h1>
                            <tr>
                                <th>Tanggal</th>
                                <th>User</th>
                                <th>File</th>
                                <th>Kategori</th>
                                <th>Ukuran</th>
                                <th>Warna</th>
                                <th>Bahan</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </h1>
                    </thead>
                    <tbody class="h5">
                        <?php while($row=$result->fetch_assoc()){ ?>
                        <tr >
                            <td><?php echo $row['tgl_pesan']; ?></td>
                            <td><?php echo $row['nama_user']; ?></td>
                            <td><?php echo $row['file']; ?></td>
                            <td><?php echo $row['nama_kategori']; ?></td>
                            <td><?php echo $row['ukuran']; ?></td>
                            <td><?php echo $row['warna']; ?></td>
                            <td><?php echo $row['bahan']; ?></td>
                            <td><?php echo $row['harga']; ?></td>
                            <td><a class="btn-warning btn-sm" href="proses.php">Proses</a> <a class="btn-danger btn-sm" href="#">Cancel</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div> <!-- End Col-->
        </div> <!-- End Container-->
    </div> <!-- End Servis-->

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