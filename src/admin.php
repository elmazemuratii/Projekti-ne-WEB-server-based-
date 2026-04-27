<?php
require_once "includes/auth.php";
requireAdmin();
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<section class="hero">
<h2>Admin Panel 🔐</h2>
<p>Vetëm admin ka qasje këtu.</p>
</section>

<section class="features">

<article>
<h3>Total Users</h3>
<p>2 Users</p>
</article>

<article>
<h3>Total Events</h3>
<p><?php echo isset($_SESSION['my_events']) ? count($_SESSION['my_events']) : 0; ?></p>
</article>

<article>
<h3>System Status</h3>
<p>Online ✅</p>
</article>

</section>

<?php include 'includes/footer.php'; ?>
