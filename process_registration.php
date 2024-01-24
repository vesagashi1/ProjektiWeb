<?php
require_once 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);

    try {
        $stmt = $conn->prepare("INSERT INTO signuptable (name, surname, email, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $surname, $email, $passwordHash]);

        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    // Redirect or handle the case where the form is not submitted
    header("Location: register.php");
    exit();
}
?>