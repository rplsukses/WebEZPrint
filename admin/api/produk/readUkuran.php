<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/produk.php';
    
    // instantiate database and product object
    $database = new Database();
    $db = $database->getConnection();
    
    // initialize object
    $produk = new produk($db);

    if (isset($_POST['id_kategori'])) {
        $produk->id_kategori = htmlspecialchars($_POST['id_kategori']);
    }

    //query produk
    $stmt = $produk->readUkuran();
    $num = $stmt->rowCount();

    //check if more than 0 record found
    if($num > 0){
        //produk array
        $produk_arr = array();
        $produk_arr["ukuran"] = array();

        // retrieve our table contents
        // fetch() is faster than fetchAll()
        // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);
    
            $produk_item=array(
                "ukuran" => $ukuran
            );
    
            array_push($produk_arr["ukuran"], $produk_item);
        }
    
        // set response code - 200 OK
        http_response_code(200);
    
        // show products data in json format
        echo json_encode($produk_arr);
    }else{
 
        // set response code - 404 Not found
        http_response_code(404);
     
        // tell the user no products found
        echo json_encode(
            array("message" => "No produk found.")
        );
    }
?>