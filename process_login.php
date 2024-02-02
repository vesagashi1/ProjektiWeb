<?php
require_once 'db_config.php';
require_once 'UserLogin.php';

class LoginProcessor {
    private $userLogin;

    public function __construct(UserLogin $userLogin) {
        $this->userLogin = $userLogin;
    }

    public function processLogin() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $loginEmail = $_POST["login-email"];
            $loginPassword = $_POST["login-password"];

            $user = $this->userLogin->authenticateUser($loginEmail, $loginPassword);

            if ($user) {
                $isAdmin = $user['is_admin'] == 1;

                if ($isAdmin) {
                    header("Location: dashboard.php");
                    exit();
                } else {
                    header("Location: index.php");
                    exit();
                }
            } else {
                echo '<script>alert("Incorrect email or password. Please sign up to create an account.");</script>';
            }
        }

        
        header("Location: register.php");
        exit();
    }
}

$userLogin = new UserLogin($databaseConnection);
$loginProcessor = new LoginProcessor($userLogin);
$loginProcessor->processLogin();
?>
