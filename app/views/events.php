<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All Events</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
 <?php require_once __DIR__ . "/partials/header.php"; ?>

  <main class="container">
    <h1>Upcoming Events</h1>
    <div class="filters">
      <input type="text" placeholder="Search events..." id="searchBox">
      <select id="categoryFilter">
        <option value="">All Categories</option>
        <option value="music">Music</option>
        <option value="tech">Tech</option>
        <option value="workshop">Workshop</option>
      </select>
    </div>

    <div class="event-grid">
      <div class="event-card">
        <img src="assets/images/event1.jpg" alt="">
        <h3><a href="event-detail">Tech Conference 2025</a></h3>
        <p>Dhaka • 20 Oct 2025</p>
        <a href="event-detail" class="btn btn-secondary">View Details</a>
      </div>
      <!-- repeat cards dynamically -->
    </div>
  </main>

<?php require_once __DIR__ . "/partials/footer.php"; ?>
</body>

</html>