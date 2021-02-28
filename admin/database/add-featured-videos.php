<?php
session_start();
include_once "../db-config.php";

if (!empty($_POST)){

    $heading = htmlentities($_POST['heading'],ENT_QUOTES);
    $thumbnail_link = htmlentities($_POST['thumbnail_link'],ENT_QUOTES);
    $video_link = htmlentities($_POST['video-link'],ENT_QUOTES);
    $created_at = date('d-m-y');
    $adminId = $_SESSION['adminId'];

    $query = "insert into featured_videos(heading, thumbnail_link, video_link, created_at,adminid) values('$heading',
                '$thumbnail_link', '$video_link', '$created_at', '$adminId')";
    mysqli_query($link,$query);
    header('location: ../featured-videos-list.php');
}else{
    header('location: ../add-featured-videos.php');
}
