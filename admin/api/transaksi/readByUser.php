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

    if (isset($_POST['id_user'])) {
        $produk->id_mitra = htmlspecialchars($_POST['id_user']);
    }

    //query transaksi
    $stmt = $transaksi->readByUser();
    $num = $stmt->rowCount();

    //check if more than 0 record found
    if($num > 0){
        //transaksi array
        $transaksi_arr = array();
        $transaksi_arr["transaksi"] = array();

        // retrieve our table contents
        // fetch() is faster than fetchAll()
        // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            // extract row
            // this will make $row['name'] to
            // just $name only
            extract($row);
    
            $transaksi_item=array(
                "id_transaksi" => $id_transaksi,
                "status" => $status,
                "tgl_pesan" => $tgl_pesan,
                "tgl_selesai" => $tgl_selesai,
                "jumlah" => $jumlah,
                "harga_total" => $harga_total,
                "keterangan" => $keterangan,
                "id_mitra" => $id_mitra,
                "id_produk" => $id_produk,
                "file" => $file
            );
    
            array_push($transaksi_arr["transaksi"], $transaksi_item);
        }
    
        // set response code - 200 OK
        http_response_code(200);
    
        // show products data in json format
        echo json_encode($transaksi_arr);
    }else{
 
        // set response code - 404 Not found
        http_response_code(404);
     
        // tell the user no products found
        echo json_encode(
            array("message" => "No transaksi found.")
        );
    }
?>