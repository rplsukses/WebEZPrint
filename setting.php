<?php
    include 'admin/api/config/database.php';
    include 'admin/core/init.php';
    include 'include/header.php';
    include 'include/footer.php';
    $database = new Database();
    $db = $database->getConnection();
    session_start();

    //Query Select
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id_mitra=$_GET['id'];
        $query = ("SELECT * FROM mitra
                WHERE id_mitra = $_SESSION[user_id]");
        $result = mysqli_query($conn, $query);
    }

    //QUERY POST
    if(isset($_POST['save'])){
        $nama_mitra = $_POST['nama'];
        $alamat_mitra = $_POST['alamat'];
        $telp_kantor = $_POST['no_telepon'];
        $email_kantor = $_POST['email'];
        $nama_pemilik = $_POST['nama_pemilik'];
        $telp_pemilik = $_POST['telp_pemilik'];
        $email_pemilik = $_POST['email_pemilik'];
        $last_seen = $_POST['last_seen'];
        $query = "UPDATE mitra
                SET nama='".$nama_mitra."',
                alamat='".$alamat_mitra."',
                no_telepon='".$telp_kantor."',
                email='".$email_kantor."',
                nama_pemilik='".$nama_pemilik."',
                telp_pemilik='".$telp_pemilik."',
                email_pemilik='".$email_pemilik."',
                last_seen='".$last_seen."'
                WHERE id_mitra = $_SESSION[user_id]";
        
        $update = mysqli_query($conn, $query);
        if($update){
            header('Location: Profile.php');
        }else{
            echo "<p>Error: " . $query . "<br" . mysqli_error($conn). "</p>";
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
                               <img src="images/logoo2.png" width="280px" height="50px"><a href="index.html"></a>                            
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
                                <h1><a href="#" title="Dreri">Setting</a></h1>
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
                        <div class="col-md-12">
                        <form action="" method="POST">
                        <?php
                            while($row=$result->fetch_assoc()){
                        ?>
                          <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Mitra</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="colFormLabel" value="<?=$row['nama'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat Mitra</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" class="form-control" id="colFormLabel" value="<?=$row['alamat'];?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Telepon Kantor</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_telepon" class="form-control" id="colFormLabel" value="<?=$row['no_telepon'];?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email Kantor</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" id="colFormLabel" value="<?=$row['email'];?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Pemilik</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_pemilik" class="form-control" id="colFormLabel" value="<?=$row['nama_pemilik'];?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Telepon Pemilik</label>
                            <div class="col-sm-10">
                                <input type="text" name="telp_pemilik" class="form-control" id="colFormLabel" value="<?=$row['telp_pemilik'];?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email Pemilik</label>
                            <div class="col-sm-10">
                                <input type="text" name="email_pemilik" class="form-control" id="colFormLabel" value="<?=$row['email_pemilik'];?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Last Seen</label>
                            <div class="col-sm-10">
                                <input type="date" name="last_seen" class="form-control" id="colFormLabel" value="<?=$row['last_seen'];?>" >
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <input class="btn btn-primary pull-right" type="submit" value="SAVE" name="save"/>
                        </form> 

                    </div>     
                    </div>

                        
    
                  
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