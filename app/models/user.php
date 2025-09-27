<?php

require_once __DIR__ . '/../config/database.php';

class User
{
    private $conn;
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function all()
    {

        $smt = $this->conn->query("SELECT * FROM users");
        return $smt->fetchAll(PDO::FETCH_ASSOC);
    }

}