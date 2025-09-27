<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard - Eventify</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
 <?php require_once __DIR__ . "/partials/header.php"; ?>

  <main class="container">
    <h1>Admin Dashboard</h1>
    <section>
      <h2>Manage Events</h2>
      <table class="event-table">
        <thead>
          <tr>
            <th>Title</th>
            <th>Date</th>
            <th>Location</th>
            <th>Seats</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tech Conference 2025</td>
            <td>20 Oct 2025</td>
            <td>Dhaka</td>
            <td>150</td>
            <td>
              <a href="add-event.html" class="btn btn-small">Edit</a>
              <button class="btn btn-danger btn-small">Delete</button>
            </td>
          </tr>
          <!-- More rows dynamically -->
        </tbody>
      </table>
    </section>
  </main>

  <?php require_once __DIR__ . "/partials/footer.php"; ?>
</body>

</html>