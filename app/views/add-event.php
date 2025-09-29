<?php require_once __DIR__ . "/partials/header.php"; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_event_action'])) {

    // Prepare data array
    $eventData = [
        'name' => $_POST['event_name'] ?? null,
        'date' => $_POST['event_date'] ?? null,
        'location' => $_POST['event_location'] ?? null,
        'category' => $_POST['event_category'] ?? null,
        'seats' => $_POST['event_seats'] ?? null,
        'description' => $_POST['event_description'] ?? null,
        'image' => $_FILES['event_image'] ?? null
    ];


    // Create event
    $event = new Event();
    $result = $event->create($eventData);
    if ($result['success']) {
        // Redirect to success page or show success message
        header('Location: /dashboard?message=Event created successfully');
        exit;
    } else {
        // Handle error
        $error = $result['message'];
        // Display error to user
        echo "<div class='error'>{$error}</div>";
    }

}
?>



<main class="container">
    <h1>Add New Event</h1>
    <form class="event-form" method="POST" enctype="multipart/form-data">
        <label>Event Title
            <input type="text" name="event_name">
        </label>
        <label>Date
            <input type="date" name="event_date">
        </label>
        <label>Location
            <input type="text" name="event_location">
        </label>
        <label>Category
            <select name="event_category">
                <option value="">Select Category</option>
                <option value="music">Music</option>
                <option value="tech">Tech</option>
                <option value="workshop">Workshop</option>
            </select>
        </label>
        <label>Total Seats
            <input type="number" name="event_seats" min="1">
        </label>
        <label>Event Image
            <input type="file" name="event_image" accept="image/*">
        </label>
        <label>Description
            <textarea name="event_description" rows="5"></textarea>
        </label>
        <button type="submit" name="add_event_action" class="btn btn-primary">Save Event</button>
    </form>
</main>

<?php require_once __DIR__ . "/partials/footer.php"; ?>