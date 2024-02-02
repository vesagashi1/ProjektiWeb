<?php
class ShowUsers {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllUsers() {
        try {
            
            $stmt = $this->conn->prepare("SELECT * FROM signform");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit(); 
        }
    }
}
?>
