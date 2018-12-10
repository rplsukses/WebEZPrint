<?php
    include_once 'admin/api/config/database.php';

    $database = new Database();
    $db = $database->getConnection();

    if(isset($_POST['signup'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $password2=md5($_POST['password2']);

        // menyimpan username dan level ke dalam session
    if(empty($nama)||empty($alamat)||empty($email)||empty($password)||empty($password2))
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
        $a="insert into mitra(nama,alamat,email,password)values('$nama','$alamat','$email','$password')";
        $b=mysqli_query($con, $a);
        echo "<script>location='index.php' </script>";
    if($b){
    
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