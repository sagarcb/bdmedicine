<?php
session_start();
if ($_SESSION['isLogged'] != 1){
    header('location: login/index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin Dashboard</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="resources/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="resources/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!--Digital Clock stylesheet-->
    <link rel="stylesheet" href="css/digital-clock.css">

    <!--Custom style-->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
           <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="">
                   <i class="fas fa-bars"></i>
               </a>
           </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item">
                <a class="nav-link" href="login/logout.php">
                    <i class="far fa-bell"></i>
                    Logout
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                        class="fas fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
            <img src="resources/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Dashboard</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">

                </div>
                <div class="info">
                    <a href="index.php" class="d-block"><i class="fa fa-user" ></i>  Admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Actions
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="medicine-list.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Medicine List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add-medicine.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Medicine</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="featured-videos-list.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Featured Videos List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="featured-news-list.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Featured News List</p>
                                </a>
                            </li>
                        </ul>
                            <li class="nav-item">
                                <a href="healthdays-list.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>International Health Days</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
