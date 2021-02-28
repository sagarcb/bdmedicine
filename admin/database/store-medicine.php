
<?php
session_start();
include '../db-config.php';
$error= " ";
if (!empty($_POST)) {
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
    $adminid = $_SESSION['adminId'];
    $created_at = date("Y-m-d H:i:s");

    mysqli_query($link, "insert into medicine_description(title,generic_name,price,pharmaceuticals
                    ,pharmacology,indication,dosage_administration,contraindication,precaution,side_effect,
                    pregnancy_lactation,drug_interaction,overdose,storage_system,packing,created_at,adminid) values('$title',
                     '$generic_name', '$unit_price', '$pharmaceutical', '$pharmacology', '$indication',
                     '$dosage_administration', '$contraindication', '$precaution', '$side_effect', '$pregnancy_lactation',
                     '$drug_interaction', '$overdose', '$storage', '$packing', '$created_at','$adminid')");
    header('location: ../medicine-list.php');
}

