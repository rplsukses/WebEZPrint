<?php
    class Transaksi{
        private $conn;
        private $table_name = "transaksi";

        //object properties 
        public $id_transaksi;
        public $status;
        public $tgl_pesan;
        public $tgl_selesai;
        public $jumlah;
        public $harga_total;
        public $keterangan;
        public $id_user;
        public $id_mitra;
        public $id_produk;

        // constructor with $db as database connection
        public function __construct($db){
            $this->conn = $db;
        }

        //read transaksi
        public function read(){
            //select all query
            $query = "SELECT * FROM " . $this->table_name;

            //perpare query
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }

        //read transaksi by user
        public function readByUser(){
            //select all query
            $query = "SELECT * FROM " . $this->table_name . " WHERE id_user = " . $this->id_user;

            //perpare query
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }
?>