<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav>
  <ul>
    <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>
    <li><a href="events.php" class="<?= $current_page == 'events.php' ? 'active' : '' ?>">Events</a></li>
    <li><a href="groups.php" class="<?= $current_page == 'groups.php' ? 'active' : '' ?>">Groups</a></li>
    <li><a href="create-event.php" class="<?= $current_page == 'create-event.php' ? 'active' : '' ?>">Create Event</a></li>
    <li><a href="my-events.php" class="<?= $current_page == 'my-events.php' ? 'active' : '' ?>">My Events</a></li>

    <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
      <li><a href="admin.php" class="<?= $current_page == 'admin.php' ? 'active' : '' ?>">Admin</a></li>
    <?php endif; ?>

    <?php if(isset($_SESSION['user'])): ?>
      <li><a href="logout.php" class="<?= $current_page == 'logout.php' ? 'active' : '' ?>">Logout</a></li>
    <?php else: ?>
      <li><a href="login.php" class="<?= $current_page == 'login.php' ? 'active' : '' ?>">Login</a></li>
    <?php endif; ?>
  </ul>
</nav>
