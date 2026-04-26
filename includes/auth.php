<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}


if(!isset($_SESSION['role'])){
    $_SESSION['role'] = "user";
}


function requireAdmin(){
    if(!isset($_SESSION['role']) || $_SESSION['role'] != "admin"){
        echo "<p style='color:red;text-align:center;'>Access denied: Admin only</p>";
        exit;
    }
}
?>
