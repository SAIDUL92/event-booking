<?php

// Get the request path
// $request = $_SERVER['REQUEST_URI'];

// $base = '/event-booking/';

// $path = str_replace($base, '', parse_url($request, PHP_URL_PATH));

// $path = trim($path, '/');

// Handle asset requests
// if (strpos($path, 'assets/') === 0 || strpos($path, 'public/assets/') === 0) {
//     return false; // Let Apache handle it
// }

// Route handling
// switch ($path) {
//     case '':
//     case 'index':
//         require __DIR__ . '/app/views/index.php';
//         break;

//     case 'events':
//         require __DIR__ . '/app/views/events.php';
//         $controller = new EventController();
//         $controller->index();
//         break;

//     case 'login':
//         require __DIR__ . '/app/views/login.php';
//         break;

//     case 'register':
//         require __DIR__ . '/app/views/register.php';
//         break;

//     case 'dashboard':
//         require __DIR__ . '/app/views/dashboard.php';
//         break;

//     case 'my-bookings':
//         require __DIR__ . '/app/views/my-bookings.php';
//         break;

//     case 'event-detail':
//         require __DIR__ . '/app/views/event-detail.php';
//         break;

//     case 'booking':
//         require __DIR__ . '/app/views/booking.php';
//         break;

//     case 'add-event':
//         require __DIR__ . '/app/views/add-event.php';
//         break;

//     case 'users':
//         require_once __DIR__ . '/app/controllers/userController.php';
//         $controller = new UserController();
//         $controller->index();
//         break;

//     default:
//         http_response_code(404);
//         echo '404 - Page Not Found';
//         break;
// }



// Parse URL and get the path
$request_uri = $_SERVER['REQUEST_URI'];
$base_path = '/event-booking'; // Adjust this to your project folder name
$path = str_replace($base_path, '', parse_url($request_uri, PHP_URL_PATH));
$path = trim($path, '/');

// Split path for handling dynamic routes (e.g., event-detail/123)
$path_parts = explode('/', $path);
$route = $path_parts[0] ?? '';
$param = $path_parts[1] ?? null;

switch ($route) {
    case '':
    case 'index':
        require __DIR__ . '/app/views/index.php';
        break;

    case 'events':
        require_once __DIR__ . '/app/controllers/EventController.php';
        $controller = new EventController();
        $controller->index();
        break;

    case 'event-detail':
        if ($param && is_numeric($param)) {
            require_once __DIR__ . '/app/controllers/EventController.php';
            $controller = new EventController();
            $controller->show($param); // Pass event ID
        } else {
            http_response_code(404);
            echo '404 - Event Not Found';
        }
        break;

    case 'login':
        // require_once __DIR__ . '/app/controllers/AuthController.php';
        // $controller = new AuthController();
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $controller->login();
        // } else {
        //     $controller->showLoginForm();
        // }
        break;

    case 'register':
        // require_once __DIR__ . '/app/controllers/AuthController.php';
        // $controller = new AuthController();
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $controller->register();
        // } else {
        //     $controller->showRegisterForm();
        // }
        break;

    case 'logout':
        //require_once __DIR__ . '/app/controllers/AuthController.php';
        // $controller = new AuthController();
        // $controller->logout();
        break;

    case 'dashboard':
        // Check if user is logged in and is admin
        // session_start();
        // if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
        //     header('Location: /event-booking/login');
        //     exit;
        // }
        // require_once __DIR__ . '/app/controllers/DashboardController.php';
        // $controller = new DashboardController();
        // $controller->index();
        break;

    case 'add-event':

        // require_once __DIR__ . '/app/controllers/EventController.php';
        // Admin only
        // session_start();
        // if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
        //     header('Location: /event-booking/login');
        //     exit;
        // }
        require_once __DIR__ . '/app/controllers/EventController.php';
        $controller = new EventController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->create();
        } else {
            $controller->showCreateForm();
        }
        break;

    case 'my-bookings':
        // User must be logged in
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /event-booking/login');
            exit;
        }
        // require_once __DIR__ . '/app/controllers/BookingController.php';
        // $controller = new BookingController();
        // $controller->myBookings();
        break;

    case 'booking':
        if ($param && is_numeric($param)) {
            // booking/123 - Book specific event
            session_start();
            if (!isset($_SESSION['user'])) {
                header('Location: /event-booking/login');
                exit;
            }
            //require_once __DIR__ . '/app/controllers/BookingController.php';
            // $controller = new BookingController();
            // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //     $controller->create($param);
            // } else {
            //     $controller->showBookingForm($param);
            // }
        } else {
            http_response_code(404);
            echo '404 - Invalid Booking Request';
        }
        break;

    case 'users':
        // Admin only
        session_start();
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            header('Location: /event-booking/login');
            exit;
        }
        // require_once __DIR__ . '/app/controllers/UserController.php';
        // $controller = new UserController();
        // $controller->index();
        break;

    case 'api':
        // Handle API routes
        if ($param) {
            switch ($param) {
                case 'events':
                    // require_once __DIR__ . '/app/controllers/api/EventApiController.php';
                    // $controller = new EventApiController();
                    // $controller->handleRequest();
                    break;
                default:
                    http_response_code(404);
                    echo json_encode(['error' => 'API endpoint not found']);
            }
        }
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/app/views/404.php'; // Create a proper 404 page
        break;
}