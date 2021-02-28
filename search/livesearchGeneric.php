<?php
include 'db-config.php';
$q = $_REQUEST['q'];

if ($q != " "){
    $result = mysqli_query($link,"select distinct generic_name from medicine_description where (SOUNDEX(generic_name)=SOUNDEX('%$q%')) or (generic_name like '%$q%')");
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);

    if(!empty($data)) {
        foreach ($data as $row) {
            $id = $row['generic_name'];
            echo "<li><a href='brandsUnderGenerics.php?id=$id'>" . $row['generic_name'] . "</a></li>";
        }
    }else{
        echo "<li>No results Found</li>";
    }

}
