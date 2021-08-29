<?php 
    $customer = new showAllCustomer();
    $result = $customer->show();
    // $row = mysqli_num_rows($result);
    // print_r(mysqli_fetch_assoc($result));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show Customer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class = "row">
        <div class="col-1">
            <ul> STT
                <?php foreach ($result as $value) {?>
                <li><?php echo $value['id'] ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-2">
            <ul> Full Name
                <?php foreach ($result as $value) {?>
                <li><?php echo $value['fullname'] ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-2">
            <ul> Phone
                <?php foreach ($result as $value) {?>
                <li><?php echo $value['phone'] ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-3">
            <ul> Email
                <?php foreach ($result as $value) {?>
                <li><?php echo $value['email'] ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-2">
            <ul> Birthday
                <?php foreach ($result as $value) {?>
                <li><?php echo $value['dateofbirth'] ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-2">
            <ul>Send Email
                <?php foreach ($result as $value) {?>
                <li><input type="checkbox" value=""> Chọn</li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>


</body>
</html>
