<?php
session_start();
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<?php

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $group = $_POST['group'];

    if(!isset($_SESSION['joined_groups'])){
        $_SESSION['joined_groups'] = [];
    }

    if(!in_array($group, $_SESSION['joined_groups'])){
        $_SESSION['joined_groups'][] = $group;
        $message = "U bashkove me sukses në grupin: $group 🎉";
    } else {
        $message = "Ti je tashmë pjesë e grupit: $group 👍";
    }
}
?>

<section class="hero">
    <h2>Gjej komunitetin tënd të preferuar 🤝</h2>
    <p>Zgjidh një hobby dhe bashkohu me njerëz që ndajnë të njëjtin pasion.</p>
</section>

<?php
if($message != ""){
    echo "<p style='text-align:center; color:lightgreen; font-weight:bold; margin:20px;'>$message</p>";
}
?>

<main class="features">

<?php

$groups = [

    [
        "name" => "Photography Lovers",
        "members" => 120,
        "desc" => "Për adhuruesit e fotografisë dhe editimit."
    ],

    [
        "name" => "Coding Club",
        "members" => 300,
        "desc" => "Programim, web development dhe projekte."
    ],

    [
        "name" => "Football Fans",
        "members" => 500,
        "desc" => "Diskutime, ndeshje dhe evente sportive."
    ],

    [
        "name" => "Music Producers",
        "members" => 80,
        "desc" => "Beat making, mixing dhe studio sessions."
    ]

];

foreach($groups as $group){

    echo "
    <article>

        <h3>{$group['name']}</h3>

        <p>{$group['desc']}</p>

        <p><strong>Anëtarë:</strong> {$group['members']}</p>

        <form method='POST'>
            <input type='hidden' name='group' value='{$group['name']}'>
            <button type='submit'>Join Group</button>
        </form>

    </article>
    ";
}

?>

</main>

<?php include 'includes/footer.php'; ?>
