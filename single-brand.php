<?php
include 'databaseWorks/db-config.php';

    $id = $_GET['id'];
    $result = mysqli_query($link, "select * from medicine_description where id = $id");
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

                    <div class="col-md-12 data-row-top">
                        <span id="brand-title" class="md-icon-container"><b><h1 id="title"><?=$data['title']?></h1></b></span>
                    </div>

                    <div class="col-md-12 data-row-strength">
                        <span id="genericName" class="generic" style="font-size: medium">Generic: <?=$data['generic_name']?></span>
                    </div>

                    <div class="col-md-12" style="font-size: medium;">
                        <span id="packing">PackSize: <?=$data['packing']?></span>
                    </div>

                    <div class="col-md-12">
                        <span id="pharmaceuticals" class="data-row-company pharma" style="font-size: medium"><?=$data['pharmaceuticals']?></span>
                    </div>

                    <div class="col-md-12 packages-wrapper">
                        <div class="package-container">
                            <span class="unit-price">
                        <span id="packsizePrice" class="package-pricing" style="font-size: medium";">
                            <b>Price: <?=$data['price']?> Tk.</b>
                            </span>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-12 indications">
                        <div class="col-md-12 single-entity">
                            <span><h4>Indications</h4></span>
                        </div><br/>
                        <pre id="indications"><?=$data['indication']?></pre>
                    </div>

                    <div class="col-md-12 pharmacology float-left">
                        <div class="col-md-12 single-entity">
                            <span><h4>Pharmacology</h4></span>
                        </div><br/>
                        <pre id="pharmacology"><?=$data['pharmacology']?></pre>
                    </div>

                    <div class="col-md-12 dosage-administration">
                        <div class="col-md-12 single-entity">
                            <span><h4>Dosage & Administration</h4></span>
                        </div><br/>
                        <pre id="dosage-administration"><?=$data['dosage_administration']?></pre>
                    </div>

                    <div class="col-md-12 contraindications">
                        <div class="col-md-12 single-entity">
                            <span><h4>Contraindication</h4></span>
                        </div><br/>
                        <pre id="contraindications"><?=$data['contraindication']?></pre>
                    </div>

                    <div class="col-md-12 precaution">
                        <div class="col-md-12 single-entity">
                            <span><h4>Precautions & Warnings</h4></span>
                        </div><br/>
                        <pre id="precaution"><?=$data['precaution']?></pre>
                    </div>

                    <div class="col-md-12 side-effects">
                        <div class="col-md-12 single-entity">
                            <span><h4>Side Effects</h4></span>
                        </div><br/>
                        <pre id="side-effects"><?=$data['side_effect']?></pre>
                    </div>

                    <div class="col-md-12 pregnancy-lactation">
                        <div class="col-md-12 single-entity">
                            <span><h4>Pregnancy & Lactation</h4></span>
                        </div><br/>
                        <pre id="pregnancy-lactation"><?=$data['pregnancy_lactation']?></pre>
                    </div>

                    <div class="col-md-12 drug-interaction">
                        <div class="col-md-12 single-entity">
                            <span><h4>Drug Interaction</h4></span>
                        </div><br/>
                        <pre id="drug-interaction"><?=$data['drug_interaction']?></pre>
                    </div>

                    <div class="col-md-12 overdose">
                        <div class="col-md-12 single-entity">
                            <span><h4>Overdose Effects</h4></span>
                        </div><br/>
                        <pre id="overdose"><?=$data['overdose']?></pre>
                    </div>

                    <div class="col-md-12 storage-condition">
                        <div class="col-md-12 single-entity">
                            <span><h4>Storage Conditions</h4></span>
                        </div><br/>
                        <pre id="storage-condition"><?=$data['storage_system']?></pre>
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
