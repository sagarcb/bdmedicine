<?php
session_start();
unset($_SESSION['isLoggedSuperAdmin']);
header('location: ../index.php');
