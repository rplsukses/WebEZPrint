<?php
    // required headers
    //header("Access-Control-Allow-Origin: http://localhost/EZPrint/admin/api/");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 

    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/user.php';
    
    // instantiate database and product object
    $database = new Database();
    $db = $database->getConnection();

    //initialize object
    $user = new User($db);

    $response = array("error" => FALSE);

    if (isset($_POST['email']) && isset($_POST['password'])) {    
        $user->email = htmlspecialchars($_POST['email']);
        $user->password = htmlspecialchars($_POST['password']);
        $stmt = $user->login();
        $num = $stmt->rowCount();
        //$encrypted_password = hash("sha256", $password);// encrypted password
                
        //$sql = $MySQLiconn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

        if($num > 0){
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $response["error"] = FALSE;
            $response["message"] = "Login Successfull";
            $response["data"]["nama"] = $nama;
            $response["data"]["email"] = $email;
            }

        echo json_encode($response);
        }else{
            $response["error"] = TRUE;
            $response["message"] = "Incorrect Email or Password!";

        echo json_encode($response);
        }
    }  
?>