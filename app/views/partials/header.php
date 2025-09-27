<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Default Title' ?></title>
  <link rel="stylesheet" href="/event-booking/public/assets/css/style.css">
</head>

<body>

  <header class="site-header">
    <div class="container flex-between">
      <a href="/" class="logo">Eventify</a>
      <nav class="nav">
        <a href="index">Home</a>
        <a href="events">Events</a>
        <a href="my-bookings">My Bookings</a>
        <a href="login" class="btn btn-primary">Login</a>
      </nav>
    </div>
  </header>