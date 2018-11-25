<?php
    class DetailProduk{
        private $conn;
        private $table_name = "detail_produk";

        //object properties
        public $id_detail;
        public $ukuran;
        public $warna;
        public $bahan;
        public $harga;

        // constructor with $db as database connection
        public function __construct($db){
            $this->conn = $db;
        }

        //read produk detail
        public function read(){
            //select all query
            $query = "SELECT * FROM " . $this->table_name;

            //perpare query
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
        
        public function readByID(){
            //select all query
            $query = "SELECT * FROM " . $this->table_name . " WHERE id_detail = " . $this->id_detail;

            //perpare query
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }
?>