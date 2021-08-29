<?php
    require_once('./mvc/models/ConnectDB.php');
    class CustomerModel extends ConnectDB
    {
        public function showAllCustomers() 
        {
            // $ConnectDB = new ConnectDB();
            $conn = new PDO("mysql:host=localhost;dbname=ql_kh", 'root', '');
            $sql = $conn->prepare("SELECT * FROM customers ");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $result = $sql->fetchAll();
            return $result;
        }
    }
?>