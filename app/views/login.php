<?php require_once __DIR__ . "/partials/header.php"; ?>

<main class="container auth-container">
    <h1>Login to Your Account</h1>
    <form class="auth-form">
        <label>Email
            <input type="email" name="email" placeholder="you@example.com" required>
        </label>
        <label>Password
            <input type="password" name="password" placeholder="********" required>
        </label>
        <button type="submit" class="btn btn-primary">Login</button>
        <p class="auth-link">No account? <a href="register.html">Register here</a></p>
    </form>
</main>

<?php require_once __DIR__ . "/partials/footer.php"; ?>