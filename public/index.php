<?php

echo 'hello world!';

// require_once __DIR__ . '/../app/controllers/userController.php';

// public/index.php

// Parse current path
// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// $base = '/event-booking';  // base folder name

// $path = str_replace($base, '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// $path = trim($path, '/');




// // Base path to controllers
// $controller_base_url = '/../app/controllers/';

// echo $path;
// switch ($path) {

//     case '/event-booking/':   // Home page


//     case '/event-booking/public/':
//         require_once __DIR__ . $controller_base_url . 'userController.php';
//         $controller = new UserController();
//         $controller->index();
//         break;

//     case '/event-booking/dashboard/':
//         require_once __DIR__ . $controller_base_url . 'userController.php';
//         $controller = new UserController();
//         $controller->index();
//         break;

//     default:
//         http_response_code(404);
//         echo '404 Not Found';
//         break;
// }