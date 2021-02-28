<?php

$link = mysqli_connect('localhost','root','','medistore');
$error = " ";
if (!empty($_POST)){
    $name = htmlentities($_POST['name'],ENT_QUOTES);
    $email = htmlentities($_POST['email'],ENT_QUOTES);
    $number = htmlentities($_POST['number'],ENT_QUOTES);
    $pass = htmlentities($_POST['password'],ENT_QUOTES);
    $password = password_hash($pass,PASSWORD_DEFAULT);
    if (!empty($name) && !empty($email) && !empty($number) && !empty($pass)){
        mysqli_query($link,"insert into admin(name,email,password,number) values ('$name','$email','$password','$number')");
        header('location: admin-list.php');
    }else{
        $error = "All the fields are required!!!";
    }

}

?>

<?php include_once "common/header.php"?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add new Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Add admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <!--New Designs should be added here-->
                    <form method="post">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter full name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="numer">Mobile Number</label>
                            <input type="number" class="form-control" id="number" name="number" placeholder="Give Mobile Number">
                            <p id="errorNumber"></p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                    </form>
                    <p style="color: red"><?=$error?></p>
                </div>
                <div class="col-md-2"><span></span></div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    var v = document.getElementById('number');
    var p = document.getElementById('errorNumber');
    var b = document.getElementById('submitBtn');

    v.addEventListener('keyup',function () {
        var n = v.value;
        if (n.length > 11) {
            p.textContent = "Number Must be withing 11 digit";
            b.setAttribute('type', 'button');
        } else{
            p.textContent = " ";
            b.setAttribute('type', 'submit');
        }
    });
</script>

<?php include_once "common/footer.php"?>
