<?php 
	/* Setting for online
	$servername = "localhost";
	$username = "id5573945_imaisnaini";
	$password = "123456";
	$dbname = "id5573945_db_rumah_mukenah";
	*/

	// Setting for local
	$servername = "localhost";
	$username = "u623212174_root";
	$password = "rplsukses";
	$dbname = "u623212174_print";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		echo "Databaase connection failed with followings errors : ". $conn->connect_error;
		die();
	}
 ?>