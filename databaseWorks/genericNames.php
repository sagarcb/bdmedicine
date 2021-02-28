<?php
include 'databaseWorks/db-config.php';

$limit = 12;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page -1) * $limit;

$result = mysqli_query($link,"select distinct generic_name from medicine_description limit $start,$limit");
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

$result11 = mysqli_query($link, "select count(distinct generic_name) as id from medicine_description");
$custCount = mysqli_fetch_all($result11,MYSQLI_ASSOC);
$total = $custCount[0]['id'];
$pages = ceil($total / $limit);
$count = $pages;

$previous = $page - 1;
$next = $page + 1;
if($previous <1){
    $previous = 1;
}
if($next > $pages){
    $next = $pages;
}
