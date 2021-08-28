<?php
    session_start();
    $controller = isset($_GET['controller'])?$_GET['controller'].'Controller' : 'Login';
    $action = isset($_GET['action'])?$_GET['action']:'getUser';
    require_once("./mvc/controllers/login.php");
    $usercontroller = new $controller();
    $usercontroller->$action();
?>