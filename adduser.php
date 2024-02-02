<?php
include_once 'User.php'; 
include_once 'db_config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  
    $user = new User($name, $surname, $email, $password);

   
    $databaseConnection = new DatabaseConnection();
    $databaseConnection->startConnection(); 

  
    if ($databaseConnection->insertUser($user)) {
      
        echo "<script>alert('User added successfully');</script>";
        header("Location:dashboard.php");
    } else {
        echo "Error adding user";
    }
}
?>
