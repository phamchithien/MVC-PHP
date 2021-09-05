<?php 
    require_once ("./mvc/views/v-login.php");
    require_once ("./mvc/models/m-login.php");
    $email = isset($_POST['email'])? $_POST['email']: '';
    $password = isset($_POST['password'])? md5($_POST['password']): '';
    $remember = isset($_POST['remember'])? $_POST['remember']: '';
    if($remember == true) {
        setcookie('email',$email);
        setcookie('password',$_POST['password']);
    }
    if($email != null && $password != null){
        check($email,$password);
    }
    function check($email, $password)
    {
        $check = new modelLogin();
        $temp = $check->Login($email,$password);
        if($temp > 0)
        {
            $_SESSION['email'] = $email;
        }
        else {
            echo '<script type="text/javascript">alert("Sai email hoặc mật khẩu")</script>';
        }
    }
?>