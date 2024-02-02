<?php

include_once 'User.php';
include_once 'editUserc.php';
include_once 'DeleteUserC.php';
include_once 'ShowUsers.php';
include_once 'Reservation.php';

class DatabaseConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "signupdatabase1";
    private $conn;

    public function startConnection() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            error_log("Connection failed: " . $e->getMessage());
            exit("Connection failed. Please check the database connection details.");
        }
    }
    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn = null;
    }

    public function insertUser(User $user) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO signform (name, surname, email, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$user->getName(), $user->getSurname(), $user->getEmail(), $user->getPassword()]);
            return true;
        } catch (PDOException $e) {
            echo "Error adding user: " . $e->getMessage();
            return false;
        }
    }

    public function editUser() {
        return new editUserC($this->conn);
    }

    public function deleteUser() {
        return new DeleteUserC($this->conn);
    }

    public function showUsers() {
        return new ShowUsers($this->conn);
    }
    public function handleError($errorMessage) {
        
        error_log($errorMessage);
        exit("An unexpected error occurred. Please try again later.");
    }

    public function getAllReservations() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM contact");
            $stmt->execute();
            $reservationsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

            
            $reservations = [];
            foreach ($reservationsData as $reservationData) {
                $reservation = new Reservation(
                    $reservationData['id'] ?? null,
                    $reservationData['name'] ?? null,
                    $reservationData['surname'] ?? null,
                    $reservationData['tel'] ?? null,
                    $reservationData['email'] ?? null,
                    $reservationData['date'] ?? null,
                    $reservationData['message'] ?? null
                );

                $reservations[] = $reservation;
            }

            return $reservations;
        } catch (PDOException $e) {
            $this->handleError("Error fetching reservations: " . $e->getMessage());
        }
    }

}


$databaseConnection = new DatabaseConnection();
$databaseConnection->startConnection();
?>