<?php
class DeleteUserC {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function deleteUser($user_id) {
        try {
            
            $stmt = $this->conn->prepare("DELETE FROM signform WHERE id = :user_id");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();

            
            header("Location: dashboard.php");
            exit();
        } catch (PDOException $e) {
            
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
