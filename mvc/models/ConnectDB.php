<?php 
    class ConnectDB 
    {
        public $conn;
        public $server = "localhost";
        public $username = "root";
        public $pass = "";
        public $dbname = "ql_kh";
        public function __construct()
        {
            $this->conn = mysqli_connect($this->server, $this->username, $this->pass, $this->dbname);
        }
    }
    
?>