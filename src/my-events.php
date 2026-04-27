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

<section class="hero">
  <h2>Eventet e Mia 📌</h2>
  <p>Këtu shfaqen eventet që ke krijuar.</p>

  <p>Përdoruesi: <?php echo $_SESSION['user']; ?></p>
</section>

<section class="features">

<?php
if(empty($_SESSION['my_events'])){
    echo "<p style='text-align:center;'>S'ke ende evente të krijuara.</p>";
} else {


    usort($_SESSION['my_events'], function($a, $b){
        return strcmp($a['title'] ?? '', $b['title'] ?? '');
    });

    foreach($_SESSION['my_events'] as $index => $event){

        $title = $event['title'] ?? "";
        $city  = $event['city'] ?? "";
        $date  = $event['date'] ?? "";
        $max   = $event['maxParticipants'] ?? "";

        echo "
        <div class='event-card'>
            <h3>$title</h3>
            <p>📍 $city</p>
            <p>📅 $date</p>
            <p>👥 $max</p>

            <a href='my-events.php?delete=$index'>
                <button style='background:red;color:white;padding:8px 14px;border:none;border-radius:8px;'>
                    Delete
                </button>
            </a>
        </div>
        ";
    }
}
?>

</section>

<?php include 'includes/footer.php'; ?>
