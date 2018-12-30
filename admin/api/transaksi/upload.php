<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/transaksi.php';

    // instantiate database and product object
    $database = new Database();
    $db = $database->getConnection();

    // initialize object
    $transaksi = new Transaksi($db);
    $user = new User($db);
    $response = array();

    if (isset($_GET['apicall'])) {
        switch ($_GET['apicall']) {
            case 'upload':
                if(isset($_POST['user']) && isset($_POST['mitra']) && isset($_POST['produk']) && $_FILES['file']['error'] === UPLOAD_ERR_OK){
                    $transaksi->id_user=htmlspecialchars($_POST['user']);
                    $transaksi->id_mitra=htmlspecialchars($_POST['mitra']);
                    $transaksi->id_produk=htmlspecialchars($_POST['produk']);
                    $username = $user->getUsername($transaksi->id_user);
                    $dir = $_FILES['file']['tmp_name'];
                    $filename = explode(".", $_FILES['file']['name']);
                    
                    if($transaksi->saveFile($username, $dir, $filename)){
                        if($transaksi->insert()){
                            $response['error'] = false;
                            $response['message'] = 'File Uploaded Successfullly';
                        }else{
                            $response['error'] = true;
                            $response['message'] = 'Failed insert to database';                            
                        }
                    }else{
                        $response['error'] = true;
                        $response['message'] = 'Failed to upload file';
                    }
                }else{
                    $response['error'] = true;
                    $response['message'] = 'Required parameters are not available';
                }
                break;

            case 'getallimages':
                $upload = new FileHandler();
                $response['error'] = false;
                $response['file'] = $upload->getAllFiles();

                break;
        }
        
        echo json_encode($response);
    }
?>