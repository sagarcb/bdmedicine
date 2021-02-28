<?php
$link = mysqli_connect('localhost','root','','medistore');

if (isset($_GET)){
    $id = $_GET['id'];
    mysqli_query($link,"delete from admin where id=$id");
    header('location: admin-list.php');
    echo $id;
}
