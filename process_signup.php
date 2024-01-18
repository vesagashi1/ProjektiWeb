<?php
$servername = "localhost:8008";
$db = "signupdatabase";
$username = "root";
$password = "vesa123";


$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT); 


try {
    $pdo = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    $stmt = $pdo->prepare("INSERT INTO signuptable (name, surname, email, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $surname, $email, $passwordHash]);


    header("Location: index.php");
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
