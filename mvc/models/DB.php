<?php 
    class DB
    {
        function connectDB()
        {
            $host = "localhost";
            $conn = mysqli_connect('localhost', 'root', '', 'ql_kh');
            return $conn;
        }
    }
    
?>