<?php
session_start();
$_SESSION=[]; // Session Reset

session_destroy(); 
header('Location: login.php');
exit();

?>