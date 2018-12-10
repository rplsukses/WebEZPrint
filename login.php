<?php 
	$conn = mysqli_connect("localhost","root","","u623212174_print");
		if (isset($_POST["login"])) {
			$email = $_POST["email"];
            $password = $_POST["password"];
            
			$result = mysqli_query($conn, "SELECT * FROM mitra WHERE email = '$email'");
  			//cek email
			if (mysqli_num_rows($result)===1) {
   				 //cek password
				$row = mysqli_fetch_assoc($result);
				if($password == $row["password"]){
      			//set sesion 
					// $_SESSION['login_mitra'] = true;
					// $_SESSION['uim'] = $row["uim_mitra"];

					echo " <script>alert('Login Sukses');</script> <meta http-equiv='refresh' content='1;url=welcome.php'>";
				}else{
					echo "<script>alert('Password Anda Salah , Silahkan masukkan password yang benar');</script> <meta http-equiv='refresh' content='1;url=index.php'>";
				}

			}else{
                echo "<script>alert('Email dan Password anda tidak valid');</script> <meta http-equiv='refresh' content='1;url=index.php'>";

			}
	}
?>