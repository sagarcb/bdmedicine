<?php
session_start();
include "../db-config.php";
$uploadfile = $_FILES['uploadfile']['tmp_name'];
require 'phpspreadsheet/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
$reader->setReadDataOnly(True);
$objExcel = $reader->load($uploadfile);
$worksheet = $objExcel->getActiveSheet();

if (!empty($uploadfile)) {
    foreach ($objExcel->getWorksheetIterator() as $worksheet) {
        $highestRow = $worksheet->getHighestRow();
        for ($row = 2; $row <= $highestRow; $row++) {
            $title = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
            $generic_name = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
            $price = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
            $pharmaceutical = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
            $pharmacology = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
            $indication = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
            $dosage_administration = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
            $contraindication = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
            $precaution = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
            $side_effect = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
            $pregnancy_lactation = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
            $drug_interaction = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
            $overdose = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
            $storage = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
            $packing = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
            $admin = $_SESSION['adminId'];
            $created_at = date("Y-m-d H:i:s");            mysqli_query($link, "insert into medicine_description(title,generic_name,price,pharmaceuticals
                    ,pharmacology,indication,dosage_administration,contraindication,precaution,side_effect,
                    pregnancy_lactation,drug_interaction,overdose,storage_system,packing,created_at,adminid) values('$title',
                     '$generic_name', '$price', '$pharmaceutical', '$pharmacology', '$indication',
                     '$dosage_administration', '$contraindication', '$precaution', '$side_effect', '$pregnancy_lactation',
                     '$drug_interaction', '$overdose', '$storage', '$packing', '$created_at', '$admin')");
            mysqli_query($link, "insert into generics(generic_names) values('$generic_name')");
        }


    }

    header('location: ../medicine-list.php');
} else {
    echo "<script>
window.history.back();
</script>";
}


