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
                        <form>
                          <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">ID Produk</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="colFormLabel" placeholder="ID Produk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="colFormLabel" placeholder="Kategori">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="colFormLabel" placeholder="Jenis">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Ukuran</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="colFormLabel" placeholder="Ukuran">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Warna</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="colFormLabel" placeholder="Warna">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Bahan</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="colFormLabel" placeholder="Bahan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="colFormLabel" placeholder="Harga">
                            </div>
                        </div>
                        </form><a class="btn btn-warning pull-right" href="admin.php">ADD</a>

                               
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