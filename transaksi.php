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
                                <th>No</th>
                                <th>ID produk</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </h1>
                    </thead>
                    <tbody class="h5">
                        <tr >
                            <td>1</td>
                            <td>001</td>
                            <td>11-10-2018</td>
                            <td>Zauza</td>
                            <td>matematika.docx</td>
                            <td><a class="btn-warning btn-sm" href="proses.php">Proses</a> <a class="btn-danger btn-sm" href="#">Cancel</a></td>
                        </tr>
                        <tr>
                            
                            <td>2</td>
                            <td>002</td>
                            <td>28-10-2018</td>
                            <td>Isana</td>
                            <td>LaporanResmi.docx</td>
                             <td><a class="btn-warning btn-sm" href="proses.php">Proses</a> <a class="btn-danger btn-sm" href="#">Cancel</a></td>
                        </tr>
                        <tr>
                            
                            <td>3</td>
                            <td>003</td>
                            <td>05-11-2018</td>
                            <td>Fatma</td>
                            <td>GDU.xls</td>
                             <td><a class="btn-warning btn-sm" href="proses.php">Proses</a> <a class="btn-danger btn-sm" href="#">Cancel</a></td>
                        </tr>
                        <tr >
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn-warning btn-sm" href="proses.php">Proses</a> <a class="btn-danger btn-sm" href="#">Cancel</a></td>
                        </tr>
                        <tr >
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn-warning btn-sm" href="proses.php">Proses</a> <a class="btn-danger btn-sm" href="#">Cancel</a></td>
                        </tr>
                        <tr >
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn-warning btn-sm" href="proses.php">Proses</a> <a class="btn-danger btn-sm" href="#">Cancel</a></td>
                        </tr>
                        <tr >
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn-warning btn-sm" href="proses.php">Proses</a> <a class="btn-danger btn-sm" href="#">Cancel</a></td>
                        </tr>
                        <tr >
                           
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a class="btn-warning btn-sm" href="proses.php">Proses</a> <a class="btn-danger btn-sm" href="#">Cancel</a></td>
                        </tr>
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