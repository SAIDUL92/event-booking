<?php require_once __DIR__ . "/partials/header.php"; ?>
<h1>All Users</h1>
<ul>
    <?php

    foreach ($users as $user): ?>
        <li><?= htmlspecialchars($user['name']) ?> (<?= htmlspecialchars($user['email']) ?>)</li>
    <?php endforeach; ?>
</ul>

<?php require_once __DIR__ . "/partials/footer.php"; ?>