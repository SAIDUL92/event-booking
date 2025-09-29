<?php

// require_once __DIR__ . '/../models/add-event.php';



// class EventController
// {
//     public function index()
//     {
//         $pageTitle = "Add New Event";
//         $eventModel = new Event();
//         $events = $eventModel->getAll();

//         require __DIR__ . "/../views/add-event.php";
//     }
// }



require_once __DIR__ . '/../models/add-event.php';

class EventController
{
    private $eventModel;

    public function __construct()
    {
        $this->eventModel = new Event();
    }

    public function index()
    {
        $events = $this->eventModel->getAll();
        require __DIR__ . '/../views/events.php';
    }

    public function show($id)
    {
        $event = $this->eventModel->getById($id);
        if (!$event) {
            http_response_code(404);
            require __DIR__ . '/../views/404.php';
            return;
        }
        require __DIR__ . '/../views/event-detail.php';
    }

    public function showCreateForm()
    {
        require __DIR__ . '/../views/add-event.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $eventData = [
                'name' => $_POST['title'] ?? null,
                'date' => $_POST['date'] ?? null,
                'location' => $_POST['location'] ?? null,
                'category' => $_POST['category'] ?? null,
                'seats' => $_POST['seats'] ?? null,
                'description' => $_POST['description'] ?? null,
                'image' => $_FILES['image'] ?? null
            ];

            $result = $this->eventModel->create($eventData);

            if ($result['success']) {
                header('Location: /event-booking/events');
                exit;
            } else {
                $error = $result['message'];
                require __DIR__ . '/../views/add-event.php';
            }
        }
    }
}