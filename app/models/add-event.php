<?php

require_once __DIR__ . '/../config/database.php';
class Event
{
    private $conn;
    private $table = 'events';

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function create($data)
    {
        // Validate required fields
        $required = ['name', 'date', 'location', 'category', 'seats', 'description'];
        foreach ($required as $field) {
            if (empty($data[$field])) {
                return ['success' => false, 'message' => "Field {$field} is required"];
            }
        }

        // Handle image upload if provided
        $imagePath = null;
        if (isset($data['image']) && $data['image']['error'] === UPLOAD_ERR_OK) {
            $imagePath = $this->handleImageUpload($data['image']);
            if (!$imagePath) {
                return ['success' => false, 'message' => 'Image upload failed'];
            }
        }

        try {
            $sql = "INSERT INTO {$this->table} (name, date, location, category, seats, description, image, created_at) 
                    VALUES (:name, :date, :location, :category, :seats, :description, :image, NOW())";

            $stmt = $this->conn->prepare($sql);

            $result = $stmt->execute([
                ':name' => $data['name'],
                ':date' => $data['date'],
                ':location' => $data['location'],
                ':category' => $data['category'],
                ':seats' => (int) $data['seats'],
                ':description' => $data['description'],
                ':image' => $imagePath
            ]);

            if ($result) {
                return ['success' => true, 'message' => 'Event created successfully', 'id' => $this->conn->lastInsertId()];
            }

            return ['success' => false, 'message' => 'Failed to create event'];

        } catch (PDOException $e) {
            return ['success' => false, 'message' => 'Database error: ' . $e->getMessage()];
        }
    }


    public function getAll()
    {
        try {
            $sql = "SELECT * FROM {$this->table} ORDER BY date ASC";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM {$this->table} WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }


    private function handleImageUpload($file)
    {
        $uploadDir = __DIR__ . '/../../public/uploads/events/';

        // Create directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Validate file type
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        if (!in_array($file['type'], $allowedTypes)) {
            return false;
        }

        // Validate file size (5MB max)
        if ($file['size'] > 5 * 1024 * 1024) {
            return false;
        }

        // Generate unique filename
        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $filename = uniqid('event_') . '.' . $extension;
        $targetPath = $uploadDir . $filename;

        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            return 'uploads/events/' . $filename; // Return relative path for database
        }

        return false;
    }
}