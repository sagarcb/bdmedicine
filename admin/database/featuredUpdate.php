<?php
include_once "../db-config.php";
$id = " ";
$status = " ";
$newsId = "";
$newsStatus = "";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];
    mysqli_query($link, "update featured_videos set featured=$status where id=$id");
    echo json_encode(['success' => "successfully updated"]);
}

if (!empty($_GET['newsId'])) {
    $newsId = $_GET['newsId'];
    $newsStatus = $_GET['newsStatus'];

    mysqli_query($link, "update featured_news set featured=$newsStatus where id=$newsId");
    echo json_encode(['success' => "successfully updated"]);
}
