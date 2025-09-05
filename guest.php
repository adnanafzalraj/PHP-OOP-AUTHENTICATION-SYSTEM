<?php 
session_start();

// This will work as middleware for Login Security Checks
// If it find user_id in session
if(isset($_SESSION['user_id'])){
    // It means user is Logged In 
    // So Redirect to Dashboard Page
    header("Location: dashboard.php");
    exit();
}

?>