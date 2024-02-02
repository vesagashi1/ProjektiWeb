<?php

include 'dbmenu_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $item_id = $_POST['item_id'];

    
    $databaseConnection = new DatabaseConnection();
    $conn = $databaseConnection->startConnection();

   
    if ($databaseConnection->deleteMenuItem($item_id)) {
        
        header("Location: dashboard.php");
        exit();
    } else {
        
        echo "Error deleting item.";
    }
}
?>
