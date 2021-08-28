<?php
    require_once('./mvc/models/ConnectDB.php');
    class CustomerModel extends ConnectDB
    {
        public function showAllCustomer() 
        {
            $ConnectDB = new ConnectDB();
            $sql = "SELECT * FROM customers ";
            $result = mysqli_query($ConnectDB->conn, $sql);
            return $result;
        }
    }
?>