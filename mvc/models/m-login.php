<?php 
    require_once ("./mvc/models/DB.php");
    class modelLogin extends DB
    {
        function Login($email,$password)
        {
            $con = new DB();
            $conn = $con->connectDB();
            $sql = "SELECT * FROM user WHERE mailaddress = '$email' AND password = '$password'";
            $query = mysqli_query($conn, $sql);
            $result = mysqli_num_rows($query);
            return $result;
        }
    }
    
?>