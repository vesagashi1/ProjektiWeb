<?php

class UserRegistration {
    private $db;

    public function __construct(DatabaseConnection $db) {
        $this->db = $db;
    }

    public function registerUser($name, $surname, $email, $password, $isAdmin) {
        try {
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $this->db->getConnection()->prepare("INSERT INTO signform (name, surname, email, password, is_admin) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$name, $surname, $email, $passwordHash, $isAdmin]);

            return true;
        } catch (PDOException $e) {
            echo "Error adding user: " . $e->getMessage();
            return false;
        }
    }
}

?>
