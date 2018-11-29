<?php
    class Admin{
        private $conn;
        private $table_name = "admin";

        //object properties
        public $id_admin;
        public $nama;
        public $password;
        public $email;

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