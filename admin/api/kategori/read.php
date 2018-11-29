<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/kategori.php';
    
    // instantiate database and product object
    $database = new Database();
    $db = $database->getConnection();

    //initialize object
    $kategori = new Kategori($db);

    //query kategori
    $stmt = $kategori->read();
    $num = $stmt->rowCount();

    if($num > 0){
        //kategori array
        $kategori_arr = array();
        $kategori_arr["kategori"] = array();

        // retrieve our table contents
        // fetch() is faster than fetchAll()
        // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);
    
            $kategori_item=array(
                "id_kategori" => $id_kategori,
                "nama" => $nama,
                "icon" => $icon
            );
    
            array_push($kategori_arr["kategori"], $kategori_item);
        }
    
        // set response code - 200 OK
        http_response_code(200);
    
        // show products data in json format
        echo json_encode($kategori_arr);
    }else{ 
        // set response code - 404 Not found
        http_response_code(404);
     
        // tell the user no products found
        echo json_encode(
            array("message" => "No kategori found.")
        );
    }
?>