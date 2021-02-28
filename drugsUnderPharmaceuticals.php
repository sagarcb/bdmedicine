
<?php
include_once 'databaseWorks/db-config.php';

$pharmaceutical = $_GET['id'];

$query = "select * from medicine_description where pharmaceuticals like '$pharmaceutical'";
$result = mysqli_query($link,$query);
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

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
<?php include "search/searchPharmaceuticals.php"?>
<!--Search Section ends-->


<div class="container">
    <div class="row">
        <div class="colo-md-12">

        </div>
    </div>
</div>


<!--HomePage main Contents starts-->
<div class="Home-contents">
    <div class="container">
        <div class="row">
            <!--Page Heading starts-->
            <div class="col-md-12" id="page-title">
                <h3><span id="i">|</span> List Of Brand Names Under <?=$pharmaceutical?></h3>
            </div>
            <!--Page Heading ends-->

            <!--Brand Names Starts-->
            <div class="col-md-12">
                <div class="row">
                    <?php
                    foreach ($data as $row){
                        ?>
                        <div class="col-md-4">
                            <a href="single-brand.php?id=<?=$row['id']?>">
                                <div class="card" id="brand-names">
                                    <div class="card-body">
                                        <h4 class="card-title"><?=$row['title']?></h4>
                                        <h6 class="card-subtitle mb-2 text-muted"><?=$row['packing']?></h6>
                                        <h6 class="card-subtitle mb-2 text-muted"><?=$row['generic_name']?></h6>
                                        <h6 class="card-subtitle mb-2 text-muted"><?=$row['pharmaceuticals']?></h6>
                                        <h6 class="card-subtitle mb-2 text-muted">Unit Price: <?=$row['price']?>.00 Tk.</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <!--Brand names ends-->


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
<script type="text/javascript" src="search/searchPharmaceuticals.js"></script>
</body>
</html>
