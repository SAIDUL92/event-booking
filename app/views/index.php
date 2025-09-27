<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eventify - Home</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

  <?php require_once __DIR__ . "/partials/header.php"; ?>
  <!-- include header -->
  <header class="hero">
    <div class="hero-content">
      <h1>Discover & Book Amazing Events</h1>
      <p>Concerts, workshops, conferences and more!</p>
      <a href="events" class="btn btn-primary">Browse Events</a>
    </div>
  </header>

  <section class="features container">
    <h2>Why Choose Eventify?</h2>
    <div class="grid-3">
      <div class="card">
        <h3>Seamless Booking</h3>
        <p>Quick and secure event reservations with instant confirmation.</p>
      </div>
      <div class="card">
        <h3>Diverse Events</h3>
        <p>Music, tech, food—find events for every interest.</p>
      </div>
      <div class="card">
        <h3>Admin Dashboard</h3>
        <p>Organizers can create and manage events effortlessly.</p>
      </div>
    </div>
  </section>

  <?php require_once __DIR__ . "/partials/footer.php"; ?>
</body>

</html>