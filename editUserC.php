<?php
class EditUserC {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function updateUser($user_id_edit, $new_name, $new_surname, $new_email, $new_password) {
        try {
           
            $stmt = $this->conn->prepare("UPDATE signform SET name = :new_name, surname = :new_surname, email = :new_email, password = :new_password WHERE id = :user_id_edit");
            $stmt->bindParam(':user_id_edit', $user_id_edit);
            $stmt->bindParam(':new_name', $new_name);
            $stmt->bindParam(':new_surname', $new_surname);
            $stmt->bindParam(':new_email', $new_email);
            $stmt->bindParam(':new_password', $new_password);
            $stmt->execute();

           
            header("Location: dashboard.php");
            exit();
        } catch (PDOException $e) {
        
            echo "Error: " . $e->getMessage();
        }
    }
}