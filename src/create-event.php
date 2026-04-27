<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . "/classes/Event.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Event</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <h1>Local Events & Hobby Finder</h1>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="groups.php">Groups</a></li>
      <li><a href="create-event.php">Create Event</a></li>
      <li><a href="my-events.php">My Events</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
</header>

<main class="form-container">
  <div class="create-event-wrapper">

<?php
if(!isset($_SESSION['user'])){
    echo "<p style='color:red'>You must be logged in to create an event.</p>";
    include 'includes/footer.php';
    exit;
}


if(!isset($_SESSION['my_events']) || !is_array($_SESSION['my_events'])){
    $_SESSION['my_events'] = [];
}

$error = "";
$success = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $title = trim($_POST['title']);
    $city = trim($_POST['city']);
    $contact = trim($_POST['contact']);
    $date = $_POST['date'];
    $max = (int) $_POST['max'];


    if(!preg_match("/^[0-9]{9,12}$/", $contact)){
        $error = "Contact number is not valid!";
    }
    elseif(!preg_match("/^[a-zA-Z\s]+$/", $city)){
        $error = "City name is not valid!";
    }
    elseif(empty($title) || empty($date) || empty($max)){
        $error = "All fields must be filled!";
    }
    else{

        $event = new Event($title, $city, $date, $max);

        $_SESSION['my_events'][] = $event->toArray();

        $success = "Event created successfully!";
    }
}
?>

<?php if($success): ?>
<div class="popup-message success">
    <?php echo $success; ?>
</div>
<?php endif; ?>

<?php if($error): ?>
<div class="popup-message error">
    <?php echo $error; ?>
</div>
<?php endif; ?>

<?php if($error): ?>
    <p style="color:red;text-align:center;"><?php echo $error; ?></p>
<?php endif; ?>

<form method="POST" class="event-form">
  <h2>Create a New Event</h2>

  <input type="text" name="title" placeholder="Event Title" required>
  <input type="text" name="city" placeholder="City" required>
  <input type="text" name="contact" placeholder="Contact Number" required>
  <input type="date" name="date" required>
  <input type="number" name="max" placeholder="Max Participants" required>

  <button type="submit">Create Event</button>
</form>

  </div>
</main>

</body>
</html>
