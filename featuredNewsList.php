<?php

include 'databaseWorks/db-config.php';

$limit = 6;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page -1) * $limit;

$featured_news = mysqli_query($link, "select * from featured_news");
$f_news = mysqli_fetch_all($featured_news,MYSQLI_ASSOC);

$result11 = mysqli_query($link, "select count(id) as id from featured_news where featured=1");
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
?>
<!doctype html>
<html lang="en">
<head>
    <?php include_once 'head.php' ?>
</head>
<body>
<!--Brand Name section Starts-->
<?php include_once 'common/siteName.php'?>
<!--Brand Name Section Ends-->

<!--Head Navbar Starts-->
<?php include_once 'common/common-navbar.php';?>
<!--Head Navbar ends-->

<!--Search Section starts-->
<?php include "search/search.php"?>
<!--Search Section ends-->

<!--HomePage main Contents starts-->

<div class="Home-contents">
    <div class="container">
        <div class="row">
            <!--Page Heading starts-->
            <div class="col-md-12" id="page-title">
                <h3><span id="i">|</span>Featured News</h3>
            </div>
            <!--Page Heading ends-->


            <?php foreach ($f_news as $row){?>
                <div class="col-md-4 news-card">
                    <a href="featuredNewsDetails.php?id=<?=$row['id']?>">
                        <div class="card" id="home-card">
                            <div class="row card-body">
                                <img class="col-sm-5 card-img mr-0" style="height: 72px; margin-top: 11px;" src="admin/resources/newsCoverImages/<?=$row['cover_image']?>" alt="Card image cap">
                                <div class="col-sm-7 mr-0" style="margin-left: -7px; margin-right: 0px">
                                    <h6 class="card-text"><?=$row['heading']?></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php }?>
        </div>

        <!--Pagination starts-->
        <div class="row">
            <div class="col-md-12">
                <div class="pagination">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" style="color: #353B3F" href="featuredNewsList.php?page=<?= $previous; ?>">Previous</a></li>
                            <?php for($i = 1; $i <= $pages; $i++):?>
                                <li class="page-item"><a class="page-link" style="color: #353B3F" href="featuredNewsList.php?page=<?= $i; ?>"><?=$i?></a></li>
                            <?php endfor; ?>
                            <li class="page-item"><a class="page-link" style="color: #353B3F" href="featuredNewsList.php?page=<?= $next; ?>">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--Pagination Ends-->
    </div>
</div>

<!--HomePage main contents ends-->

<!--Footer Section starts-->
<?php include 'common/common-footer.php'?>
<!--Footer Section ends-->

<!--Bootstrap js links-->
<script src="resources/js/jquery.min.js"></script>
<script src="resources/js/owl-carousel.js"></script>
<script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="resources/js/custom.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="search/search.js"></script>
</body>
</html>
