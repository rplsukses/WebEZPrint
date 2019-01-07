<?php
    include 'admin/api/config/database.php';
    include 'admin/core/init.php';
    $database = new Database();
    $db = $database->getConnection();

    if(isset($_POST['signup'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp_kantor=$_POST['no_telepon'];
    $email=$_POST['email'];
    $nama_pemilik=$_POST['nama_pemilik'];
    $telp_pemilik=$_POST['telp_pemilik'];
    $email_pemilik=$_POST['email_pemilik'];
    $password=md5($_POST['password']);
    $password2=md5($_POST['password2']);

        // menyimpan username dan level ke dalam session
    if(empty($nama)||empty($alamat)||empty($telp_kantor)||empty($email)||empty($nama_pemilik)||empty($telp_pemilik)||empty($email_pemilik)||empty($password)||empty($password2))
    {
      
        echo "<script type='text/javascript'>
        onload =function(){
        alert('Data belum lengkap, silahkan periksa kembali isian form!');
      }
      </script>";
    }elseif($password != $password2)
    {
        echo "<script type='text/javascript'>
        onload =function(){
        alert('Password Pertama dan kedua tidak sama!');
      </script>";
    }else{
        $query="INSERT into mitra (nama,alamat,no_telepon,email,nama_pemilik,telp_pemilik,email_pemilik,password)
                VALUES('$nama','$alamat','$telp_kantor','$email','$nama_pemilik','$telp_pemilik','$email_pemilik',md5('$password'))";
        $result=mysqli_query($conn, $query);
        echo "<script>location='index.php' </script>";
    if($result){
    
    echo "<script type='text/javascript'>
      onload =function(){
      alert('Sign Up Berhasil, Silahkan login');
      }
      </script>";
    }else{
        echo "<script type='text/javascript'>
        onload =function(){
            alert('Data gagal disimpan!');
        }
      </script>";
        }
    }
}
?>