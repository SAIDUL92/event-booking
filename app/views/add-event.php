<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add / Edit Event - Eventify</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php require_once __DIR__ . "/partials/header.php"; ?>

    <main class="container">
        <h1>Add New Event</h1>
        <form class="event-form">
            <label>Event Title
                <input type="text" name="title" required>
            </label>
            <label>Date
                <input type="date" name="date" required>
            </label>
            <label>Location
                <input type="text" name="location" required>
            </label>
            <label>Category
                <select name="category" required>
                    <option value="">Select Category</option>
                    <option value="music">Music</option>
                    <option value="tech">Tech</option>
                    <option value="workshop">Workshop</option>
                </select>
            </label>
            <label>Total Seats
                <input type="number" name="seats" min="1" required>
            </label>
            <label>Event Image
                <input type="file" name="image" accept="image/*">
            </label>
            <label>Description
                <textarea name="description" rows="5" required></textarea>
            </label>
            <button type="submit" class="btn btn-primary">Save Event</button>
        </form>
    </main>

    <?php require_once __DIR__ . "/partials/footer.php"; ?>
</body>

</html>