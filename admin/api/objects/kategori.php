<?php
    class Kategori{
        private $conn;
        private $table_name = "kategori";

        //object properties
        public $id_kategori;
        public $nama;
        public $icon;

        // constructor with $db as database connection
        public function __construct($db){
            $this->conn = $db;
        }

        //read mitra
        public function read(){
            //select all query
            $query = "SELECT * FROM " . $this->table_name;

            //prepare query 
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }
?>