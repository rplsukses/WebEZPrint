<?php
    class Mitra{
        private $conn;
        private $table_name = "mitra";

        //object properties
        public $id;
        public $nama;
        public $alamat;
        public $email;
        public $telepon;
        public $foto;
        public $jam_buka;
        public $jam_tutup;

        // constructor with $db as database connection
        public function __construct($db){
            $this->conn = $db;
        }

        //read mitra
        function read(){
            //select all query
            $query = "SELECT * FROM `mitra`";

            //prepare query 
            $stmt = $this->conn->prepare($query);

            $stmt->execute();

            return $stmt;
        }
    }
?>