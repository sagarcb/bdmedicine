<?php
include 'databaseWorks/db-config.php';

$id = $_GET['id'];
$result = mysqli_query($link, "select * from health_days where id = $id");
$data = mysqli_fetch_assoc($result);



?>
<!doctype html>
<html lang="en">
<head>
    <?php include_once 'head.php' ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300;400&display=swap" rel="stylesheet"></head>
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

            <div class="col-md-12 col-sm-6 col-lg-12 col-md-12" id="items">
                <div class="row data-row" style="overflow: hidden;">

                    <!--Page Heading starts-->
                    <div class="col-md-12" id="page-title">
                        <h3><span id="i">|</span><?=$data['heading']?></h3><br>
                        <h5 class="ml-1" style="color: black;"><?=$data['date']?></h5>
                    </div>
                    <!--Page Heading ends-->

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <img width="100%" src="admin/resources/healthdaysCoverImages/<?=$data['coverImage']?>" alt="">
                            </div>
                            <div class="col-md-6">
                                <pre><?=$data['description']?></pre>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
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
