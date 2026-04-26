<?php
session_start();
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<section class="hero">
    <h2>Gjej eventin tënd të ardhshëm 🎯</h2>
    <p>Shkruaj qytetin dhe zbulo çka po ndodh afër teje.</p>

    <?php
    if(isset($_SESSION['user'])){
        echo "<p>Mirë se erdhe, " . $_SESSION['user'] . " 👋</p>";
    }
    ?>
</section>

<section class="filter">
    <input type="text" id="searchInput" placeholder="Kërko sipas qytetit...">
</section>

<p id="counter"></p>

<main class="features" id="eventsContainer">

<?php

require_once "classes/Event.php";

$events = [

    [
        "title" => "Concert Night",
        "city" => "Prishtinë",
        "category" => "Music",
        "date" => "25 Maj 2025"
    ],

    [
        "title" => "Photography Workshop",
        "city" => "Prizren",
        "category" => "Art",
        "date" => "28 Maj 2025"
    ],

    [
        "title" => "Coding Meetup",
        "city" => "Pejë",
        "category" => "Tech",
        "date" => "30 Maj 2025"
    ],

    [
        "title" => "Yoga Session",
        "city" => "Gjakovë",
        "category" => "Health",
        "date" => "1 Qershor 2025"
    ],

    [
        "title" => "Startup Event",
        "city" => "Prishtinë",
        "category" => "Business",
        "date" => "5 Qershor 2025"
    ]

];


usort($events, function($a, $b){
    return strcmp($a['title'], $b['title']);
});

foreach($events as $event){

   
    $eventObj = new Event("", "");
    $eventObj->setTitle($event['title']);
    $eventObj->setCity($event['city']);
    $eventObj->setDate($event['date']);
    $eventObj->setMaxParticipants(100);

    $badgeClass = strtolower($event['category']);

    echo "
    <article class='event-card'>

        <span class='badge $badgeClass'>{$event['category']}</span>

        <h3>{$eventObj->getTitle()}</h3>

        <p class='city'>📍 {$eventObj->getCity()}</p>

        <p class='category'>🏷 {$event['category']}</p>

        <p class='date'>📅 {$eventObj->getDate()}</p>

        <button>Shiko Detajet</button>

    </article>
    ";
}

?>

</main>

<?php include 'includes/footer.php'; ?>
