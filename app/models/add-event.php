<?php

require_once __DIR__ . '/../config/database.php';
class Add_event
{
    private $conn;
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function addEvent()
    {
        $smt = $this->conn->query("");

        return $smt->queryString;
    }
}