<?php
include_once '../db-config.php';


if (!empty($_GET['medicineId'])) {
    $id = $_GET['medicineId'];
    mysqli_query($link, "delete from medicine_description where id = $id;");
    header('location: ../medicine-list.php');
}
if (!empty($_GET['videoId'])) {
    $id = $_GET['videoId'];
    mysqli_query($link, "delete from featured_videos where id = $id;");
    header('location: ../featured-videos-list.php');
}
if (!empty($_GET['newsId'])) {
    $id = $_GET['newsId'];
    mysqli_query($link, "delete from featured_news where id = $id;");
    header('location: ../featured-news-list.php');
}
if (!empty($_GET['healthdaysId'])) {
    $id = $_GET['healthdaysId'];
    mysqli_query($link, "delete from health_days where id = $id;");
    header('location: ../healthdays-list.php');
}

