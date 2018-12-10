<?php
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // include database and object files
    include_once '../config/database.php';
    include_once '../objects/detail_produk.php';
    
    // instantiate database and product object
    $database = new Database();
    $db = $database->getConnection();
    
    // initialize object
    $detail = new DetailProduk($db);
    $detail->id_detail = '5';

    //query detail
    $stmt = $detail->readByID();
    $num = $stmt->rowCount();

    //check if more than 0 record found
    if($num > 0){
        //detail array
        $detail_arr = array();
        $detail_arr["detail"] = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
    
            $detail_item=array(
                "id_detail" => $id_detail,
                "ukuran" => $ukuran,
                "warna" => $warna,
                "bahan" => $bahan,
                "harga" => $harga
            );
    
            array_push($detail_arr["detail"], $detail_item);
        }
    
        // set response code - 200 OK
        http_response_code(200);
    
        // show products data in json format
        echo json_encode($detail_arr);
    }else{
 
        // set response code - 404 Not found
        http_response_code(404);
     
        // tell the user no products found
        echo json_encode(
            array("message" => "No detail found.")
        );
    }
?>