<?php
include_once 'dbmenu_config.php';

$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->startConnection();

if ($conn) {
    $category = isset($_GET['category']) ? $_GET['category'] : '';

    $query = "SELECT * FROM menuitems";

    if (!empty($category)) {
        $query .= " WHERE category = :category";
    }

    $stmt = $conn->prepare($query);

    if (!empty($category)) {
        $stmt->bindParam(':category', $category);
    }

    $stmt->execute();
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($menuItems);
} else {
    echo json_encode(['error' => 'Unable to establish a database connection.']);
}
?>
