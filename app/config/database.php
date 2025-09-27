<?php

// $servername = 'localhost';
// $username = 'root';
// $password = '';

// try {
//     $conn = new PDO("mysql:host=$servername", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "CREATE DATABASE IF NOT EXISTS eventify_events";
//     $conn->exec($sql);
//     echo "Database created successfully<br>";
// } catch (PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;


class Database
{
    private $host = "localhost";
    private $dbname = "eventify_events";
    private $user = "root";
    private $password = "";
    public $conn;

    public function connect()
    {
        if (!$this->conn) {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->conn;
    }

}