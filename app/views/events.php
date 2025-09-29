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
    <?php foreach ($events as $event): ?>
      <div class="event-card">
        <img src="/event-booking/public/<?= htmlspecialchars($event['image']) ?>" alt="">
        <div class="event-card-content">
          <h3><a href="event-detail/<?= $event['id'] ?>"><?= htmlspecialchars($event['name']) ?></a></h3>
          <p><?= htmlspecialchars($event['location']) ?> • <?= date('d M Y', strtotime($event['date'])) ?></p>
          <a href="event-detail/<?= $event['id'] ?>" class="btn btn-secondary">View Details</a>

        </div>
      </div>
    <?php endforeach; ?>
    <!-- repeat cards dynamically -->
  </div>
</main>

<?php require_once __DIR__ . "/partials/footer.php"; ?>