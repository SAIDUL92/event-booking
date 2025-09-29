<?php require_once __DIR__ . "/partials/header.php"; ?>

<main class="container">
  <article class="event-detail">
    <img src="assets/images/event1.jpg" alt="">
    <h1><?= $event['name'] ?></h1>
    <p>Date: <?= $event['date'] ?></p>
    <p>Location: <?= $event['location'] ?></p>
    <p>Description: <?= $event['description'] ?></p>
    <p>Available Seats: <?= $event['seats'] ?></p>
    <a href="booking" class="btn btn-primary">Book Now</a>
  </article>
</main>

<?php require_once __DIR__ . "/partials/footer.php"; ?>