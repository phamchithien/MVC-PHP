<?php 
    require_once('./mvc/controllers/login.php');
    require_once('./mvc/models/UserModel.php');
    $temp = new Login();
    $temp->getUser();
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $userModel = new UserModel();
        $viewUser = $userModel->showUser($email);
        if (mysqli_num_rows($viewUser) > 0) 
        {
            while($row = mysqli_fetch_assoc($viewUser)) {
                $name = $row["fullname"];
                $mail = $row["mailaddress"];
            }
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class = "row">
        <div class="col-3">
            <?php echo $name ?>
        </div>
        <div class="col-3">
            <?php echo $mail ?>
        </div>
        <div class="col-5">
            Avatar
        </div>
        <div class="col-1">
            <button type="submit" class="btn btn-primary">Log out</button>
        </div>
    </div>
</div>


</body>
</html>
