<?php 
    require_once('./mvc/models/UserModel.php');
    class Login
    {
        public function getUser() {
            $email = isset($_POST['email'])? $_POST['email']: '';
            $pswd = isset($_POST['pswd'])? md5($_POST['pswd']): '';
            $remember = isset($_POST['remember'])? $_POST['remember']: '';
            if($remember == true) {
                setcookie('email',$email);
                setcookie('pswd',$_POST['pswd']);
            }
            if($email!='' && $pswd!=''){
                $userModel = new UserModel();
                $result = $userModel->login($email,$pswd);
                if ($result > 0) {
                    $_SESSION['email'] = $email;
                    require_once('./mvc/controllers/show_all_customer.php');
                }
                else {
                    echo '<script type="text/javascript">alert("Sai email hoặc mật khẩu")</script>';
                    require_once('./mvc/views/login.php');
                }
            }else{
                require_once('./mvc/views/login.php');
            }
        }
    }
    
?>