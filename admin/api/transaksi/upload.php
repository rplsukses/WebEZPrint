<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/transaksi.php';
    include_once 'FileHandler.php';

    // instantiate database and product object
    $database = new Database();
    $db = $database->getConnection();

    // initialize object
    $transaksi = new Transaksi($db);
    $response = array();

    if (isset($_GET['apicall'])) {
        switch ($_GET['apicall']) {
            case 'upload':
                if(isset($_POST['user']) && isset($_POST['mitra']) && isset($_POST['produk']) && isset($_POST['file'])){
                    $transaksi->id_user=htmlspecialchars($_POST['user']);
                    $transaksi->id_mitra=htmlspecialchars($_POST['mitra']);
                    $transaksi->id_produk=htmlspecialchars($_POST['produk']);
                    $transaksi->file=htmlspecialchars($_POST['file']);

                    if($transaksi->insert()){
                        $response['error'] = false;
                        $response['message'] = 'File Uploaded Successfullly';
                    }else{
                        $response['error'] = true;
                        $response['message'] = 'Required parameters are not available';
                    }
                }else{
                    $response['error'] = true;
                    $response['message'] = 'Required parameters are not available';
                }
                /*
                if (isset($_POST['desc']) && strlen($_POST['desc']) > 0 && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
                    $upload = new FileHandler();

                    $file = $_FILES['file']['tmp_name'];

                    $desc = $_POST['desc'];

                    if ($upload->saveFile($file, getFileExtension($_FILES['file']['name']), $desc)) {
                        $response['error'] = false;
                        $response['message'] = 'File Uploaded Successfullly';
                    }

                } else {
                    $response['error'] = true;
                    $response['message'] = 'Required parameters are not available';
                }
                */
                break;

            case 'getallimages':
                $upload = new FileHandler();
                $response['error'] = false;
                $response['file'] = $upload->getAllFiles();

                break;
        }
        
        echo json_encode($response);
    }

    function getFileExtension($file)
    {
        $path_parts = pathinfo($file);
        return $path_parts['extension'];
    }
?>