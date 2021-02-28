<?php
include 'db-config.php';
$q = $_REQUEST['q'];

if ($q != " "){
    $result = mysqli_query($link,"select distinct pharmaceuticals from medicine_description where (SOUNDEX(pharmaceuticals)=SOUNDEX('%$q%')) or (pharmaceuticals like '%$q%')");
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);

    if (!empty($data)) {
        foreach ($data as $row) {
            $id = $row['pharmaceuticals'];
            echo "<li><a href='drugsUnderPharmaceuticals.php?id=$id'>" . $row['pharmaceuticals'] . "</a></li>";
        }
    }else{
        echo "<li>No results Found</li>";
    }
}
