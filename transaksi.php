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
    $query="SELECT transaksi.id_transaksi, transaksi.tgl_pesan, user.nama AS nama_user, transaksi.file, kategori.nama AS nama_kategori, produk.ukuran, produk.warna, produk.bahan, produk.harga
            FROM transaksi, user, produk, kategori
            WHERE transaksi.id_mitra=".$_SESSION['user_id']." 
            AND transaksi.status=".$status."
            AND user.id_user=transaksi.id_user 
            AND produk.id_produk=transaksi.id_produk 
            AND kategori.id_kategori=produk.id_kategori ";
    $result = mysqli_query($conn, $query);

    //Query Proses transaksi
    if(isset($_GET['proses']) && !empty($_GET['proses'])){
        $id_transaksi = $_GET['proses'];
        $query_proses = "UPDATE transaksi 
        SET status=1 WHERE id_transaksi=".$id_transaksi;
        mysqli_query($conn, $query_proses);
        header('location:transaksi.php?status=1');
    }

    //Query done transaksi
    if(isset($_GET['done']) && !empty($_GET['done'])){
        $id_transaksi = $_GET['done'];
        $query_done = "UPDATE transaksi 
        SET status=2 WHERE id_transaksi=".$id_transaksi;
        mysqli_query($conn, $query_done);
        header('location:transaksi.php?status=2');
    }

    //Query Cancel transaksi
    if(isset($_GET['cancel']) && !empty($_GET['cancel'])){
        $id_transaksi = $_GET['cancel'];
        $query_cancel = "UPDATE transaksi 
        SET status=3 WHERE id_transaksi=".$id_transaksi;
        mysqli_query($conn, $query_cancel);
        header('location:transaksi.php?status=3');
    }
?>

<body>
   <div>
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
                        <div class="col-md-12 col-sm-8">
                            <div class="responsive text-right hidden-sm hidden-xs">
                                <ul class="nav nav-pills">
                                    <li class="<?php if($status == 0) echo 'nav-item active';?>">
                                         <a class="nav-link" href="transaksi.php?status=0">Belum Diproses</a>
                                    </li>
                                    <li class="<?php if($status == 1) echo 'nav-item active';?>">
                                        <a class="nav-link" href="transaksi.php?status=1">Sedang Diproses</a>
                                    </li>
                                    <li class="<?php if($status == 2) echo 'nav-item active';?>">
                                        <a class="nav-link" href="transaksi.php?status=2">Selesai</a>
                                    </li>
                                    <li class="<?php if($status == 3) echo 'nav-item active';?>">
                                        <a class="nav-link" href="transaksi.php?status=3">Pembatalan</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <br>
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
                            <td>   
                            <?php if($status == 0) { ?>
                                <a href="transaksi.php?status=1&&proses=<?php echo $row['id_transaksi'];?>" class="btn-primary btn-sm">Proses</a>
                                <a href="transaksi.php?status=3&&cancel=<?php echo $row['id_transaksi'];?>" class="btn-primary btn-sm">Cancel</a>
                            <?php }else if($status == 1) { ?>
                                <a href="transaksi.php?status=2&&done=<?php echo $row['id_transaksi'];?>" class="btn-primary btn-sm">Done</a>
                                <a href="transaksi.php?status=3&&cancel=<?php echo $row['id_transaksi'];?>" class="btn-primary btn-sm">Cancel</a>
                            <?php }else if($status == 2) {?>
                                selesai
                            <?php }else{?>
                                Cancel
                            <?php }?>
                            </td>
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