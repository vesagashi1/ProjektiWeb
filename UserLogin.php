<?php

class UserLogin {
    private $db;

    public function __construct(DatabaseConnection $db) {
        $this->db = $db;
    }

    public function authenticateUser($loginEmail, $loginPassword) {
        try {
            $stmt = $this->db->getConnection()->prepare("SELECT * FROM signform WHERE email = ?");
            $stmt->execute([$loginEmail]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($loginPassword, $user['password'])) {
                return $user;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}

?>
