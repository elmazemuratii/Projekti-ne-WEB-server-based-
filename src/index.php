<?php
session_start();

$events = [
    ["title" => "Football Match", "category" => "Sport", "date" => "2026-05-01"],
    ["title" => "Painting Workshop", "category" => "Art", "date" => "2026-05-03"],
    ["title" => "Coding Meetup", "category" => "Technology", "date" => "2026-05-02"],
    ["title" => "Yoga Class", "category" => "Health", "date" => "2026-05-04"]
];

usort($events, function($a, $b) {
    return strcmp($a['title'], $b['title']);
});
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<div class="container">
    <h1>Local Events & Hobbies</h1>

    <?php if(isset($_SESSION['user'])): ?>
        <p>Welcome, <?php echo $_SESSION['user']; ?> 👋</p>
    <?php else: ?>
        <p>You are not logged in. <a href="login.php">Login here</a></p>
    <?php endif; ?>
