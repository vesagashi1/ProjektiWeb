<?php
include_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user_id = $_POST['user_id'];

    
    $databaseConnection = new DatabaseConnection();
    $databaseConnection->startConnection();

    
    $deleteUser = $databaseConnection->deleteUser();

        $deleteUser->deleteUser($user_id);
}
?>
