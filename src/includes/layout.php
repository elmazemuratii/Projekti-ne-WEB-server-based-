<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Event App</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav>
<a href="index.php">Home</a>
<a href="events.php">Events</a>
<a href="groups.php">Groups</a>

<?php
if(isset($_SESSION['user'])){
echo '<a href="logout.php">Logout</a>';
}else{
echo '<a href="login.php">Login</a>';
}
?>
</nav>