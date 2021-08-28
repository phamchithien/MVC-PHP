<?php 
    require_once('./mvc/models/ConnectDB.php');
    class UserModel extends ConnectDB
    {
        public function login($email,$pswd)
        {
            $ConnectDB = new ConnectDB();
            $sql = "SELECT * FROM user WHERE mailaddress = '$email' AND password = '$pswd'";
            $result = mysqli_query($ConnectDB->conn, $sql);
            $check = mysqli_fetch_assoc($result);
            return $check;
        }
    }
    
?>