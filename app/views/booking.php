<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book Event</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
 <?php require_once __DIR__ . "/partials/header.php"; ?>

<main class="container">
  <h1>Book Your Seat</h1>
  <form id="bookingForm">
    <label>Name <input type="text" name="name" required></label>
    <label>Email <input type="email" name="email" required></label>
    <label>Number of Tickets <input type="number" name="tickets" min="1" value="1"></label>
    <button type="submit" class="btn btn-primary">Confirm Booking</button>
  </form>
</main>

<?php require_once __DIR__ . "/partials/footer.php"; ?>
<script src="assets/js/main.js"></script>
</body>
</html>
