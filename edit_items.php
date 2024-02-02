<?php
include 'dbmenu_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $item_id = $_POST['item_id'];
    $new_name = $_POST['new_name'];
    $new_image_path = $_POST['new_image_path'];
    $new_category = $_POST['new_category'];

    
    $databaseConnection = new DatabaseConnection();
    $conn = $databaseConnection->startConnection(); 

    
    if ($conn !== null && $databaseConnection->editMenuItem($item_id, $new_name, $new_image_path, $new_category)) {
        
        header("Location: menu.php");
        exit();
    }
}

?>
