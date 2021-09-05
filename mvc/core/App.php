<?php 
    class App
    {
        public $controller = "Show";
        public $action = "";
        public $params = [];
        function __construct()
        {
            echo $_SESSION['email'];
        }
    }
    
?>