<?php
session_start();
include_once "../db-config.php";
$error = " ";
if (!empty($_POST)){

    $heading = htmlentities($_POST['heading'],ENT_QUOTES);
    $description = htmlentities($_POST['description'],ENT_QUOTES);
    $date = htmlentities($_POST['date']);
    $created_at = date('d-m-y');
    $cover_image = $_FILES['cover-image'];
    $adminId = $_SESSION['adminId'];


    $filename = time().'_'.rand(100000,99999).'_'.rand(100000,99999).'_'.rand(100000,99999);
    $ext = pathinfo($cover_image['name'],PATHINFO_EXTENSION);

    move_uploaded_file($cover_image['tmp_name'],"../resources/healthdaysCoverImages/$filename.$ext");
    if (!empty($heading) && !empty($description) && !empty($date) && !empty($cover_image)) {
        $query = "insert into health_days(heading, description, coverImage, date, created_at,adminid) values('$heading',
                '$description', '$filename.$ext', '$date', '$created_at','$adminId')";
        mysqli_query($link, $query);

        header('location: ../healthdays-list.php');
    }else{
        $error = "* All the fields are required";
        $_SESSION['error'] = $error;
        header('location: ../add-healthdays.php');
    }
}else{
    header('location: ../add-healthdays.php');
}
