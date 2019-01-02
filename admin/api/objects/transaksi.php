<?php
    class Transaksi{
        private $conn;
        private $table_name = "transaksi";
        private $path = "../upload/file/";
        private $url_file = "";

        //object properties 
        public $id_transaksi;
        public $status;
        public $tgl_pesan;
        public $tgl_selesai;
        public $file;
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
            $query = "SELECT * FROM " . $this->table_name . " WHERE id_user =:id_user";

            //perpare query
            $stmt = $this->conn->prepare($query);

            //sanitize
            $this->id_user=htmlspecialchars(strip_tags($this->id_user));

            //bind given value
            $stmt->bindparam(":id_user", $this->id_user);

            $stmt->execute();

            return $stmt;
        }

        //upload file
        public function saveFile($username, $dir, $filename)
        {   
            $name = $username. '_' . $filename[0] . "_" .date('Ymd') . '.' . $filename[1];
            $this->url_file = $this->path . $name;
            return move_uploaded_file($dir, $this->url_file);
        }

        //insert to transaksi
        public function insert(){
            $query = "INSERT INTO ".$this->table_name." SET 
                    id_user=:user, 
                    id_mitra=:mitra, 
                    id_produk=:produk,
                    file=:file,
                    jumlah=1,
                    harga_total=0,
                    keterangan=:ket";

            // prepare query
            $stmt = $this->conn->prepare($query);
        
            // sanitize
            $this->id_user=htmlspecialchars(strip_tags($this->id_user));
            $this->id_mitra=htmlspecialchars(strip_tags($this->id_mitra));
            $this->id_produk=htmlspecialchars(strip_tags($this->id_produk));
            $this->keterangan=htmlspecialchars(strip_tags($this->keterangan));
        
            // bind values
            $stmt->bindParam(":user", $this->id_user);
            $stmt->bindParam(":mitra", $this->id_mitra);
            $stmt->bindParam(":produk", $this->id_produk);
            $stmt->bindParam(":file", $this->url_file);
            $stmt->bindParam(":ket", $this->keterangan);
        
            // execute query
            if($stmt->execute()){
                return true;
            }
        
            return false;
        }
    }
?>