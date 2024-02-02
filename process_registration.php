<?php
require_once 'db_config.php';
require_once 'UserRegistration.php';

class RegistrationProcessor {
    private $userRegistration;

    public function __construct(UserRegistration $userRegistration) {
        $this->userRegistration = $userRegistration;
    }

    public function processRegistration() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $isAdmin = ($email === 'admin1@gmail.com') ? 1 : 0;

            $password = $_POST['password']; 

            $registrationSuccess = $this->userRegistration->registerUser($name, $surname, $email, $password, $isAdmin);

            if ($registrationSuccess) {
                header("Location: index.php");
                exit();
            } else {
                echo "Registration failed!";
            }
        } else {
            header("Location: register.php");
            exit();
        }
    }
}

$userRegistration = new UserRegistration($databaseConnection);
$registrationProcessor = new RegistrationProcessor($userRegistration);
$registrationProcessor->processRegistration();
?>
