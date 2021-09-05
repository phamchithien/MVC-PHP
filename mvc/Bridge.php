<?php 
    //login
    if(isset($_SESSION['email']))
    {
        require_once ("./mvc/core/App.php");
        $app = new App();
    }
    else 
    {
        require_once ("./mvc/controllers/c-login.php");
    }
?>