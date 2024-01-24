<?php
class DatabaseConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "signup3";

    function startConnection() {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed " . $e->getMessage();
            return null;
        }
    }
    
}

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->startConnection();