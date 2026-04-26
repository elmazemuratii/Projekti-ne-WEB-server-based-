<?php
session_start();
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>

<section class="hero">
  <h2>Zbulo Evente & Hobi Lokale</h2>

  <?php
  if(isset($_SESSION['user'])){
      echo "<p>Mirë se erdhe, " . $_SESSION['user'] . " 👋</p>";
  } else {
      echo "<p>Platformë për evente lokale dhe komunitete me interesa të përbashkëta.</p>";
  }

  if(isset($_COOKIE['last_user'])){
      echo "<p>Last login user: " . $_COOKIE['last_user'] . "</p>";
  }


  if(isset($_SESSION['role'])){
      echo "<p>Roli yt: " . $_SESSION['role'] . "</p>";
  }
  ?>
</section>


<section class="features">

  <article>
    <h3>Evente Lokale</h3>
    <p>Koncerte, kurse dhe aktivitete.</p>
  </article>

  <article>
    <h3>Hobby Groups</h3>
    <p>Gjej njerëz me interesa të njëjta.</p>
  </article>

  <article>
    <h3>Komunitet</h3>
    <p>Krijo eventet e tua.</p>
  </article>

</section>


<section class="about">
  <h2>Për çfarë është kjo platformë?</h2>

  <p>
    Local Events & Hobby Finder është krijuar për të lidhur njerëzit me evente lokale dhe komunitete sipas interesave të tyre.
    Qëllimi ynë është të ndihmojmë njerëzit të zbulojnë aktivitete të reja, të socializohen dhe të krijojnë lidhje kuptimplota.
  </p>
</section>


<section class="features-section">
  <h2>Çfarë mund të bësh këtu?</h2>

  <div class="features-list">
    <div class="feature">🔍 Kërko evente sipas qytetit dhe kategorisë</div>
    <div class="feature">👥 Bashkohu në grupe hobby sipas interesave</div>
    <div class="feature">➕ Krijo eventet e tua dhe fto të tjerët</div>
    <div class="feature">⭐ Ruaj eventet që të pëlqejnë</div>
  </div>
</section>


<section class="history">
  <h2>Si lindi ideja?</h2>

  <p>
    Ideja për këtë platformë erdhi nga nevoja për të pasur një vend të vetëm ku mund të shohësh çfarë po ndodh në qytetin tënd,
    pa kërkuar në shumë rrjete sociale apo faqe të ndryshme.
  </p>
</section>


<section class="testimonials">
  <h2>Çka po thonë përdoruesit?</h2>

  <div class="testimonials-grid">
    <div class="quote">"E gjeta një kurs fotografie në qytetin tim falë kësaj faqeje!" – Arta</div>
    <div class="quote">"Na ndihmoi me u lidhë me njerëz me interesa të njëjta." – Luan</div>
    <div class="quote">"Ide shumë e mirë për komunitetin lokal." – Elira</div>
  </div>
</section>


<section class="stats">

<?php

$stats = [
  ["+150", "Evente aktive"],
  ["+80", "Grupet hobby"],
  ["+1200", "Përdorues"],
  ["5 qytete", "Të mbuluara"]
];


sort($stats);

foreach($stats as $stat){
    echo "
    <div class='stat'>
      <h3>{$stat[0]}</h3>
      <p>{$stat[1]}</p>
    </div>
    ";
}

?>

</section>


<section class="cta">
  <h2>Gati për të filluar?</h2>
  <p>Bashkohu sot dhe zbulo eventin tënd të ardhshëm.</p>
  <a href="events.php" class="cta-btn">Shiko eventet</a>
</section>

</main>

<?php include 'includes/footer.php'; ?>
