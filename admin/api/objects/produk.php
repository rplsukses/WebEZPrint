<?php
    class Produk{
        private $conn;
        private $table_name = "produk";

        //object properties
        public $id_produk;
        public $id_mitra;
        public $id_kategori;
        public $warna;
        public $ukuran;
        public $bahan;
        public $harga;
        public $kategori;
        public $icon;
        
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

        //read by mitra
        public function readByMitra()
        {
            $query = "SELECT * FROM 
                    produk, kategori
                    WHERE produk.id_mitra=:id_mitra
                     AND kategori.id_kategori=produk.id_kategori";

            //prepare query
            $stmt = $this->conn->prepare($query);
            
            //sanitize
            $this->id_mitra=htmlspecialchars(strip_tags($this->id_mitra));

            //bind given value
            $stmt->bindparam(":id_mitra", $this->id_mitra);

            $stmt->execute();

            return $stmt;
        }

        // read by kategori
        public function readByKategori()
        {
            $query = "SELECT * FROM 
                    produk, kategori
                    WHERE produk.id_kategori=:id_kategori
                     AND kategori.id_kategori=produk.id_kategori
                     AND produk.ukuran=:ukuran";

            //prepare query
            $stmt = $this->conn->prepare($query);
            
            //sanitize
            $this->id_kategori=htmlspecialchars(strip_tags($this->id_kategori));
            $this->ukuran=htmlspecialchars(strip_tags($this->ukuran));

            //bind given value
            $stmt->bindparam(":id_kategori", $this->id_kategori);
            $stmt->bindparam(":ukuran", $this->ukuran);

            $stmt->execute();

            return $stmt;
        }

        //get ukuran by kategori
        public function readUkuran()
        {
            $query = "SELECT DISTINCT ukuran FROM produk WHERE id_kategori=:id_kategori";

            //prepare query
            $stmt = $this->conn->prepare($query);
            
            //sanitize
            $this->id_kategori=htmlspecialchars(strip_tags($this->id_kategori));

            //bind given value
            $stmt->bindparam(":id_kategori", $this->id_kategori);

            $stmt->execute();

            return $stmt;
        }

        // search
        public function search(String $cari)
        {
            $query = "SELECT * FROM 
                    produk, kategori, mitra 
                    WHERE kategori.id_kategori=produk.id_kategori
                     AND mitra.id_mitra=produk.id_mitra
                     AND kategori.nama LIKE %$cari%
                     OR produk.ukuran LIKE %$cari%
                     OR produk.bahan LIKE %$cari%
                     OR mitra.nama LIKE %$cari%";

            //prepare query
            $stmt = $this->conn->prepare($query);

            $stmt->execute();

            return $stmt;
        }
    }
?>