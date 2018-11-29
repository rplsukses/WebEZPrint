<?php
    class User{
        private $conn;
        private $table_name = "user";

        //object properties
        public $id_user;
        public $nama;
        public $foto;
        public $email;
        public $password;
        public $telepon;
        public $last_seen;

        // constructor with $db as database connection
        public function __construct($db){
            $this->conn = $db;
        }

        // check if given email exist in the database
        function emailExists(){        
            // query to check if email exists
            $query = "SELECT * FROM " . $this->table_name . "
                    WHERE email = ?
                    LIMIT 0,1";
        
            // prepare the query
            $stmt = $this->conn->prepare( $query );
        
            // sanitize
            $this->email=htmlspecialchars(strip_tags($this->email));
        
            // bind given email value
            $stmt->bindParam(1, $this->email);
        
            // execute the query
            $stmt->execute();
            return $stmt;
        }

        //login user
        public function login()
        {
            $query = "SELECT * FROM ". $this->table_name ." WHERE email=".$email." AND password=".$password;
            
            //prepare query 
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }

        //register new user
        public function register()
        {
            $query = "INSERT INTO " . $this->table_name . " SET nama=:nama, email=:email, password=:password";
            // prepare query
            $stmt = $this->conn->prepare($query);
        
            // sanitize
            $this->nama=htmlspecialchars(strip_tags($this->nama));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->password=htmlspecialchars(strip_tags($this->password));
        
            // bind values
            $stmt->bindParam(":nama", $this->nama);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":password", $this->password);
        
            // execute query
            if($stmt->execute()){
                return true;
            }
        
            return false;
        }
    }
?>