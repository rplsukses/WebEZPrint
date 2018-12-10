<?php
    class Inbox{
        private $conn;
        private $table_name = "inbox";

        //object properties
        public $id_inbox;
        public $email_pengirim;
        public $subjek;
        public $tanggal_kirim;
        public $pesan;
        
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