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

    if (isset($_POST['email']) && isset($_POST['password'])) {    
        $user->email = htmlspecialchars($_POST['email']);
        $user->password = md5(htmlspecialchars($_POST['password']));
        $stmt = $user->emailExists();
        $num = $stmt->rowCount();
                
        //$sql = $MySQLiconn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

        if($num > 0){
            $user_arr = array();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);

                $user_arr["nama"] = $nama;
                $user_arr["email"] = $email;
            }
    
            // set response code - 200 OK
            http_response_code(200);
        
            // show products data in json format
            echo json_encode($user_arr);
        }else{            
            // set response code - 404 Not found
            http_response_code(404);
        
            // tell the user no products found
            echo json_encode(
                array("message" => "Email or Password Incorrect!")
            );
        }
    }  
?>