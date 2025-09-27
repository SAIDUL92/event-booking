<?php

// Get the request path
$request = $_SERVER['REQUEST_URI'];

$base = '/event-booking/';

$path = str_replace($base, '', parse_url($request, PHP_URL_PATH));

$path = trim($path, '/');

// Handle asset requests
if (strpos($path, 'assets/') === 0 || strpos($path, 'public/assets/') === 0) {
    return false; // Let Apache handle it
}

// Route handling
switch ($path) {
    case '':
    case 'index':
        require __DIR__ . '/app/views/index.php';
        break;

    case 'events':
        require __DIR__ . '/app/views/events.php';
        break;

    case 'login':
        require __DIR__ . '/app/views/login.php';
        break;

    case 'register':
        require __DIR__ . '/app/views/register.php';
        break;

    case 'dashboard':
        require __DIR__ . '/app/views/dashboard.php';
        break;

    case 'my-bookings':
        require __DIR__ . '/app/views/my-bookings.php';
        break;

    case 'event-detail':
        require __DIR__ . '/app/views/event-detail.php';
        break;

    case 'booking':
        require __DIR__ . '/app/views/booking.php';
        break;

    case 'add-event':
        require __DIR__ . '/app/views/add-event.php';
        break;

    case 'users':
        require_once __DIR__ . '/app/controllers/userController.php';
        $controller = new UserController();
        $controller->index();
        break;

    default:
        http_response_code(404);
        echo '404 - Page Not Found';
        break;
}