<?php
include 'db-config.php';
$q = $_REQUEST['q'];

if ($q != " "){
$result = mysqli_query($link,"select title,id from medicine_description where (SOUNDEX(title)=SOUNDEX('%$q%')) or (title like '%$q%')");
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

if (!empty($data)) {
    foreach ($data as $row) {
        $id = $row['id'];
        echo "<li><a href='single-brand.php?id=$id'>" . $row['title'] . "</a></li>";
    }
}else{
    echo "<li>No results found</li>";
}

}
