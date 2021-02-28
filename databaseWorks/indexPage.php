<?php

include_once 'db-config.php';

$featured_videos = mysqli_query($link,"select * from featured_videos where featured = 1");
$f_videos = mysqli_fetch_all($featured_videos,MYSQLI_ASSOC);

$featured_news = mysqli_query($link, "select * from featured_news where featured = 1");
$f_news = mysqli_fetch_all($featured_news,MYSQLI_ASSOC);

$health_days = mysqli_query($link,"select * from health_days");
$h_days = mysqli_fetch_all($health_days,MYSQLI_ASSOC);
