<?php
include_once 'db_config.php';
ob_start();  // Start output buffering

class ContactForm {
    private $databaseConnection;

    public function __construct(DatabaseConnection $databaseConnection) {
        $this->databaseConnection = $databaseConnection;
    }

    public function processFormSubmission() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $this->databaseConnection->startConnection(); 

                
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $date = $_POST['date'];
                $message = $_POST['message'];

                
                $userCheckQuery = "SELECT * FROM signform WHERE email = :email";
                $userCheckStmt = $this->databaseConnection->getConnection()->prepare($userCheckQuery);
                $userCheckStmt->bindParam(':email', $email);
                $userCheckStmt->execute();

                if ($userCheckStmt->rowCount() > 0) {
                   
                    $this->insertReservation($name, $surname, $tel, $email, $date, $message);

                    header("Location: index.php");
                    exit();
                } else {
                   
                    echo '<script>
                            var confirmation = confirm("You need to sign up first. Do you want to go to the signup form?");
                            if (confirmation) {
                                window.location.href = "register.php";
                            }
                         </script>';
                    exit();
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    private function insertReservation($name, $surname, $tel, $email, $date, $message) {
        try {
                       $insertQuery = "INSERT INTO contact (name, surname, tel, email, date, message)
                            VALUES (:name, :surname, :tel, :email, :date, :message)";

            $insertStmt = $this->databaseConnection->getConnection()->prepare($insertQuery);
            $insertStmt->bindParam(':name', $name);
            $insertStmt->bindParam(':surname', $surname);
            $insertStmt->bindParam(':tel', $tel);
            $insertStmt->bindParam(':email', $email);
            $insertStmt->bindParam(':date', $date);
            $insertStmt->bindParam(':message', $message);

            $insertStmt->execute();
        } catch (PDOException $e) {
            throw new Exception("Error during form submission: " . $e->getMessage());
        }
    }
}


$databaseConnection = new DatabaseConnection();


$contactForm = new ContactForm($databaseConnection);


$contactForm->processFormSubmission();

ob_end_flush();  
?>
