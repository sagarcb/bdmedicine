<?php
session_start();
$link = mysqli_connect('localhost','root','','medistore');
$error = "";

$pass = password_hash('superadmin12345',PASSWORD_DEFAULT);

if(!empty($_POST)){
    $username = htmlentities($_POST['username'],ENT_QUOTES);
    $password = htmlentities($_POST['password'],ENT_QUOTES);
    $error = "";
    $query = "select * from superadmin where username like '$username'";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($result);

    if ((password_verify($password,$data['password']) == 1) && ($username === $data['username'])){
        $_SESSION['isLoggedSuperAdmin'] = 1;
        header('location: ../index.php');
    }else{
        $error = "Invalid Credentials";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SuperAdminLogin</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/login-style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag -------->
</head>
<body>
<div class="container login-container">
    <div class="row">
        <div class="col-md-12 login-form-1 ">
            <h3>Super Admin Login</h3>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Your username"/>
                    <p style="color: red"><?=$error?></p>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Your Password *" value="" />
                    <p style="color: red"><?=$error?></p>
                </div>
                <div class="form-group">
                    <button type="submit" class="btnSubmit">Login</button>

                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>
