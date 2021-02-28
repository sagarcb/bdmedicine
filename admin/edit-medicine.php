<?php
include 'db-config.php';
$id = " ";
$id = $_GET['id'];

$error= " ";



if (!empty($_POST) && $id !=0) {
    $title = htmlentities($_POST['name'], ENT_QUOTES);
    $generic_name = htmlentities($_POST['generic-name'], ENT_QUOTES);
    $unit_price = htmlentities($_POST['unit-price'], ENT_QUOTES);
    $pharmaceutical = htmlentities($_POST['pharmaceutical'], ENT_QUOTES);
    $pharmacology = htmlentities($_POST['pharmacology'], ENT_QUOTES);
    $indication = htmlentities($_POST['indication'], ENT_QUOTES);
    $dosage_administration = htmlentities($_POST['dosage-administration'], ENT_QUOTES);
    $contraindication = htmlentities($_POST['contraindication'], ENT_QUOTES);
    $precaution = htmlentities($_POST['precaution'], ENT_QUOTES);
    $side_effect = htmlentities($_POST['side-effect'], ENT_QUOTES);
    $pregnancy_lactation = htmlentities($_POST['pregnancy-lactation'], ENT_QUOTES);
    $drug_interaction = htmlentities($_POST['drug-interaction'], ENT_QUOTES);
    $overdose = htmlentities($_POST['overdose'], ENT_QUOTES);
    $storage = htmlentities($_POST['storage'], ENT_QUOTES);
    $packing = htmlentities($_POST['packing'], ENT_QUOTES);

    $featured = htmlentities($_POST['featured'] ?? 0, ENT_QUOTES);
    $created_at = date("Y-m-d H:i:s");




    $sql = "update medicine_description set title = '$title',generic_name = '$generic_name', packsize_price='$unit_price',
                pharmaceuticals= '$pharmaceutical', pharmacology= '$pharmacology', indication= '$indication',
                dosage_administration='$dosage_administration', contraindication='$contraindication', precaution='$precaution',
                side_effect='$side_effect',pregnancy_lactation='$pregnancy_lactation',drug_interaction='$drug_interaction',
                overdose='$overdose', storage_system='$storage',packing='$packing' where id = $id";
    $result = mysqli_query($link, $sql);
    header('location: medicine-list.php');



}

$result = mysqli_query($link, "select * from medicine_description where id = $id;");
$data = mysqli_fetch_assoc($result);


?>



<?php include_once "common/header.php"?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add New Medicine</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Add Medicine</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post">
                        <div class="form-group">
                            <label for="name">Medicine Name</label>
                            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Medicine name..." value="<?=$data['title']?>">
                        </div>
                        <div class="form-group">
                            <label for="generic-name">Generic name</label>
                            <input name="generic-name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Generic name..." value="<?=$data['generic_name']?>">
                        </div>
                        <div class="form-group">
                            <label for="unit-price">Unit Price</label>
                            <input name="unit-price" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Unit price..." value="<?=$data['packsize_price']?>">
                        </div>
                        <div class="form-group">
                            <label for="pharmaceutical">Pharmaceutical Company</label>
                            <input name="pharmaceutical" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pharmaceutical company name..." value="<?=$data['pharmaceuticals']?>">
                        </div>
                        <div class="form-group">
                            <label for="pharmacology">Pharmacology</label>
                            <textarea name="pharmacology" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pharmacology"><?=$data['pharmacology']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="indication">Indication</label>
                            <textarea name="indication" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Indication"><?=$data['indication']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dosage-administration">Dosage & Administration</label>
                            <textarea name="dosage-administration" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Dosage & Administration"><?=$data['dosage_administration']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="contraindication">Contraindication</label>
                            <textarea name="contraindication" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Contraindications..."><?=$data['contraindication']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="precaution">Precaution</label>
                            <textarea name="precaution" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Precautions..."><?=$data['precaution']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="side-effect">Side Effects</label>
                            <textarea name="side-effect" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Side effects..."><?=$data['side_effect']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="pregnancy-lactation">Pregnancy & Lactation</label>
                            <textarea name="pregnancy-lactation" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pregnancy & Lactation..."><?=$data['pregnancy_lactation']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="drug-interaction">Drug Interaction</label>
                            <textarea name="drug-interaction" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Drug Interaction..."><?=$data['drug_interaction']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="overdose">Overdose</label>
                            <textarea name="overdose" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Overdose effects..."><?=$data['overdose']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="storage">Storage</label>
                            <textarea name="storage" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Storage system..."><?=$data['storage_system']?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="packing">Packing</label>
                            <textarea name="packing" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Packing size..."><?=$data['packing']?></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn-success">Update Medicine</button>
                            <input type="button" class="btn-success" value="Go back!" onclick="history.back()">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once "common/footer.php"?>
