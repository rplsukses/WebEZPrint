<?php
    class Produk{
        private $conn;
        private $table_name = "produk";

        //object properties
        public $id_produk;
        public $id_mitra;
        public $id_detail;
        public $id_kategori;
        public $keterangan;

        // constructor with $db as database connection
        public function __construct($db){
            $this->conn = $db;
        }

        //read produk
        public function read(){
            //select all query
            $query = "SELECT * FROM " . $this->table_name;

            //perpare query
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }
?>