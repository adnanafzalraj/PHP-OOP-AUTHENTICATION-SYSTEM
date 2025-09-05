<?php 
session_start();

// This will work as middleware for Login Security Checks
// If it not find user_id in session
if(!isset($_SESSION['user_id'])){
    // It means user not Logged In 
    // So Redirect to Login Page
    header("Location: login.php");
    exit();
}

?>