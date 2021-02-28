<?php

include_once "../db-config.php";

if (!empty($_POST)){

    $heading = htmlentities($_POST['heading'],ENT_QUOTES);
    $thumbnail_link = htmlentities($_POST['thumbnail_link'],ENT_QUOTES);
    $video_link = htmlentities($_POST['video-link'],ENT_QUOTES);
    $created_at = date('d-m-y');
    $id = htmlentities($_POST['id'],ENT_QUOTES);

    $query = "update featured_videos set heading = '$heading', thumbnail_link = '$thumbnail_link',
                video_link = '$video_link' where id = '$id'";
    mysqli_query($link,$query);
    header('location: ../featured-videos-list.php');
}else{
    header('location: ../edit-featured-videos.php');
}
