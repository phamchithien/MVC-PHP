<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2 class="text-center"><b>Sign in</b></h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="email"><b>Email:</b></label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" <?php if(isset($_COOKIE['email'])) { ?> value="<?php echo $_COOKIE['email'] ?>" <?php }?>>
        </div>
        <div class="form-group">
            <label for="pwd"><b>Password:</b></label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" <?php if(isset($_COOKIE['pswd'])) { ?> value="<?php echo $_COOKIE['pswd'] ?>" <?php }?>>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" <?php if(isset($_COOKIE['email']) && isset($_COOKIE['pswd'])) { ?> checked <?php }?>> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


</body>
</html>
