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
    $user_arr = array();

    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['nama'])) {
        $user->email = htmlspecialchars($_POST['email']);
        $user->password = md5(htmlspecialchars($_POST['password']));                
        $user->nama = htmlspecialchars($_POST['nama']);

        // Check jika email sudah terdaftar
        if(!$user->emailExists()){
            if ($user->register()) {
                $stmt = $user->login();
                
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    
                    $user_arr["data"]["nama"] = $nama;
                    $user_arr["data"]["email"] = $email;
                    $user_arr["data"]["foto"] = $foto;
                    $user_arr["data"]["telepon"] = $telepon;
                    $user_arr["error"] = FALSE;
                    $user_arr["message"] = "Register sukses!";
                }
    
                // set response code - 200 OK
                http_response_code(200);
            
                // show products data in json format
                echo json_encode($user_arr);
            }else{
                // set response code - 404 Not found
                http_response_code(404);
                
                $user_arr["error"] = TRUE;
                $user_arr["message"] = "Register gagal!";

                // tell the user no products found
                echo json_encode($user_arr);
            }
        }else{            
            // set response code - 404 Not found
            http_response_code(404);
            
            $user_arr["error"] = TRUE;
            $user_arr["message"] = "Email sudah terdaftar!";

            // tell the user no products found
            echo json_encode($user_arr);
        }
    }
?>