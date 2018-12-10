<?php
    class Mitra{
        private $conn;
        private $table_name = "mitra";

        //object properties
        public $id_mitra;
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
        public function read(){
            //select all query
            $query = "SELECT * FROM " . $this->table_name;

            //prepare query 
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }

        //search mitra
        public function search(String $cari)
        {
            //select query
            $query = "SELECT id_mitra, nama, alamat, email, telepon, foto, jam_buka, jam_tutup 
                    FROM $this->table_name
                     WHERE nama LIKE %$cari%
                     OR alamat LIKE %$cari%";

            //prepare query 
            $stmt = $this->conn->prepare($query);

            $stmt->execute();

            return $stmt;
        }
    }
?>