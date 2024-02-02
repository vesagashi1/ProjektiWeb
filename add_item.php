<?php
include_once 'dbmenu_config.php';
include_once 'MenuItem.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $imagePath = $_POST['image_path'];
    $category = $_POST['category'];

    $databaseConnection = new DatabaseConnection();
    $conn = $databaseConnection->startConnection(); 

    
    $menuItem = new MenuItem($name, $imagePath, $category);

    
    $databaseConnection->addMenuItem($menuItem);

    
    header("Location: menu.php");
    exit();
}
?>
