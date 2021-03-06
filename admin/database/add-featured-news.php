<?php
session_start();
include_once "../db-config.php";

if (!empty($_POST)){

    $heading = htmlentities($_POST['heading'],ENT_QUOTES);
    $description = htmlentities($_POST['news-description'],ENT_QUOTES);
    $date = date('D-M-Y');
    $cover_image = $_FILES['cover-image'];
    $adminId = $_SESSION['adminId'];

    $filename = time().'_'.rand(100000,99999).'_'.rand(100000,99999).'_'.rand(100000,99999);
    $ext = pathinfo($cover_image['name'],PATHINFO_EXTENSION);

    move_uploaded_file($cover_image['tmp_name'],"../resources/newsCoverImages/$filename.$ext");

    $query = "insert into featured_news(heading, description, cover_image, date, adminid) values('$heading',
                '$description', '$filename.$ext', '$date','$adminId')";
    mysqli_query($link,$query);

    header('location: ../featured-news-list.php');
}else{
    header('location: ../add-featured-news.php');
}
