<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register - Eventify</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
 <?php require_once __DIR__ . "/partials/header.php"; ?>

<main class="container auth-container">
  <h1>Create a New Account</h1>
  <form class="auth-form">
    <label>Name
      <input type="text" name="name" placeholder="Full Name" required>
    </label>
    <label>Email
      <input type="email" name="email" placeholder="you@example.com" required>
    </label>
    <label>Password
      <input type="password" name="password" required>
    </label>
    <label>Confirm Password
      <input type="password" name="password_confirm" required>
    </label>
    <button type="submit" class="btn btn-primary">Register</button>
    <p class="auth-link">Already have an account? <a href="login.html">Login</a></p>
  </form>
</main>

<?php require_once __DIR__ . "/partials/footer.php"; ?>
</body>
</html>
