<?php
    include_once 'admin/api/config/database.php';
    $database = new Database();
    $db = $database->getConnection();

    include 'include/header.php';
    include 'include/footer.php';
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
                <div class="row">
                        <div class="col-md-12 ">
                        <a href="add_produk.php"><button type="submit" class="btn btn-warning btn-sm pull-right">Add</button></a>
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
                        <tr >
                            <td>001</td>
                            <td>Document</td>
                            <td>A4</td>
                            <td>Hitam Putih</td>
                            <td>Hvs 70 gr</td>
                            <td>Rp 200,-</td>
                            <td><a class="btn-warning btn-sm" href="edit_produk.php">Edit</a> <a class="btn-danger btn-sm" href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Document</td>
                            <td>F4</td>
                            <td>Hitam Putih</td>
                            <td>Hvs 80 gr</td>
                            <td>Rp 700,-</td>
                             <td><a class="btn-warning btn-sm" href="edit_produk.php">Edit</a> <a class="btn-danger btn-sm" href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Document</td>
                            <td>A3</td>
                            <td>Berwarna</td>
                            <td>Art paper 150gr</td>
                            <td>Rp 3500,-</td>
                            <td><a class="btn-warning btn-sm" href="edit_produk.php">Edit</a> <a class="btn-danger btn-sm" href="#">Delete</a></td>
                        </tr>
                        <tr >
                            <td>001</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                           <td><a class="btn-warning btn-sm" href="edit_produk.php">Edit</a> <a class="btn-danger btn-sm" href="#">Delete</a></td>
                        </tr>
                        <tr >
                            <td>001</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn-warning btn-sm" href="edit_produk.php">Edit</a> <a class="btn-danger btn-sm" href="#">Delete</a></td>
                        </tr>
                        <tr >
                            <td>001</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn-warning btn-sm" href="edit_produk.php">Edit</a> <a class="btn-danger btn-sm" href="#">Delete</a></td>
                        </tr>
                        <tr >
                            <td>001</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn-warning btn-sm" href="edit_produk.php">Edit</a> <a class="btn-danger btn-sm" href="#">Delete</a></td>
                        </tr>
                        <tr >
                            <td>001</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn-warning btn-sm" href="edit_produk.php">Edit</a> <a class="btn-danger btn-sm" href="#">Delete</a></td>
                        </tr>
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