<?php
<<<<<<< HEAD
    require_once 'core/init.php';
=======
	include_once 'api/config/database.php';
    $database = new Database();
    $db = $database->getConnection();
>>>>>>> mitra-new
?>

<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
	<title>EZPrint Admin Center</title>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<!--=====================INCLUDE STYLE CSS, FONTS, IMAGE==========================================-->
	<link href="assets/img/logo4.png" rel="icon" type="image/png">
	<link href="assets/login/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/login/vendor/animate/animate.css" rel="stylesheet" type="text/css">
	<link href="assets/login/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" type="text/css">
	<link href="assets/login/vendor/select2/select2.min.css" rel="stylesheet" type="text/css">
	<link href="assets/login/css/util.css" rel="stylesheet" type="text/css">
	<link href="assets/login/css/main.css" rel="stylesheet" type="text/css">
	<!--========================================END===============================================-->
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login200-pic js-tilt"><img alt="IMG" src="assets/img/logo_3.png"></div>
				<form action="" class="login100-form validate-form" method="post">
					<span class="login100-form-title">Admin Login</span>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required:ex@abc.xyz">
						<input class="input100" name="email" placeholder="Email" type="text"><span class="focus-input100"></span> <span class="symbol-input100"><i aria-hidden="true" class="fa fa-envelope"></i></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" name="password" placeholder="Password" type="password"> <span class="focus-input100"></span> <span class="symbol-input100"><i aria-hidden="true" class="fa fa-lock"></i></span>
					</div>
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" name="loginadmin" type="submit" value="Log In">
					</div>
				</form>
				<!--backend login php-->
				<?php 
	                if (isset($_POST["loginadmin"])) {
					    $email = $_POST["email"];
				        $password = $_POST["password"];
				        $query = "SELECT * FROM admin WHERE email='$email' AND password='".md5($password)."' LIMIT 0,1";
	                    $result = mysqli_query($conn, $query);
				        $row = mysqli_fetch_array($result);
				        if (mysqli_num_rows($result) == 1) {
				            session_start();
				            $_SESSION["loginadmin"] = $row["nama"];
				                echo "<p>Selamat datang ". $row["nama"] ."</p>";
				                	header('location:index.php');
				        }else{
				                echo "<p>Error: " . $query . "<br>" . mysqli_error($conn). "</p>";
				        }
				    }
			    ?>
				<!--end-->
			</div>
		</div>
	</div>
	
	<!--==================INCLUDE JS TEMPLATE=============================================-->
	<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>  
	<script src="assets/login/vendor/bootstrap/js/popper.js"></script> 
	<script src="assets/login/js/bootstrap.min.js"></script> 
	<script src="assets/login/vendor/select2/select2.min.js"></script>
	<script src="assets/login/vendor/tilt/tilt.jquery.min.js"></script> 
	<script>
	       $('.js-tilt').tilt({
	           scale: 1.1
	       })
	</script> 
	<script src="assets/login/js/main.js"></script>
</body>
</html>
=======
	<title>EZPrint</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/login/images/logo_3.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" align:"center">
				<div class="login200-pic js-tilt">
					<img src="assets/login/images/logo_3.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required:ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/login/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/login/js/main.js"></script>

</body>
</html>
>>>>>>> mitra-new
