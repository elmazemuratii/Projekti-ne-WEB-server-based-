
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<?php

if(!isset($_SESSION['user'])){
    echo "<p style='color:red;text-align:center;'>Duhet me u logu për me pa eventet!</p>";
    include 'includes/footer.php';
    exit;
}


if(!isset($_SESSION['my_events']) || !is_array($_SESSION['my_events'])){
    $_SESSION['my_events'] = [];
}


if(isset($_GET['delete'])){
    $index = (int) $_GET['delete'];

    if(isset($_SESSION['my_events'][$index])){
        unset($_SESSION['my_events'][$index]);
        $_SESSION['my_events'] = array_values($_SESSION['my_events']);
    }
}
?>
