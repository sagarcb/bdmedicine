<?php
$link = mysqli_connect('localhost','root','','medistore');

$id = $_GET['id'];
$error = " ";
if (!empty($_POST)){

    $newPass = htmlentities($_POST['password1'],ENT_QUOTES);
    $confirmPass = htmlentities($_POST['password2'],ENT_QUOTES);
    $hashed = password_hash($newPass,PASSWORD_DEFAULT);
    if ($newPass === $confirmPass){
        mysqli_query($link,"update admin set password = '$hashed' where id='$id'");
        header('location: admin-list.php');
    }else{
        $error = "Confirm password did not matched";
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
                    <h1 class="m-0 text-dark">Welcome to Admin Panel</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Password Reset</li>
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
                <div class="col-md-12">
                    <!--New Designs should be added here-->
                    <form class="form-inline" method="post">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">Password</label>
                            <input type="password" class="form-control" name="password1" id="inputPassword2" placeholder="New Password">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">Password</label>
                            <input type="password" class="form-control" name="password2" id="inputPassword2" placeholder="Confirm New Password">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Reset Password</button>
                    </form>
                    <p style="color: red"><?=$error?></p>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once "common/footer.php"?>
