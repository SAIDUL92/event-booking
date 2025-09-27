<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Bookings - Eventify</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php require_once __DIR__ . "/partials/header.php"; ?>

  <main class="container">
    <h1>My Bookings</h1>
    <table class="booking-table">
      <thead>
        <tr>
          <th>Event</th>
          <th>Date</th>
          <th>Tickets</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tech Conference 2025</td>
          <td>20 Oct 2025</td>
          <td>2</td>
          <td>Confirmed</td>
        </tr>
        <!-- dynamically add rows -->
      </tbody>
    </table>
  </main>

  <?php require_once __DIR__ . "/partials/footer.php"; ?>
</body>

</html>