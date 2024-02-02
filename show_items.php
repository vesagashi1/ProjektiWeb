<?php
include_once 'dbmenu_config.php';

$databaseConnection = new DatabaseConnection();
$databaseConnection->startConnection(); // Establish database connection

try {
    
    $menuItems = $databaseConnection->getAllMenuItems();
} catch (PDOException $e) {
    echo "Error fetching menu items: " . $e->getMessage();
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Menu Items</title>
</head>
<body>
    <h2>Menu Items</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image Path</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($menuItems as $menuItem): ?>
                <tr>
                    <td><?php echo $menuItem['id']; ?></td>
                    <td><?php echo $menuItem['name']; ?></td>
                    <td><?php echo $menuItem['image_path']; ?></td>
                    <td><?php echo $menuItem['category']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
