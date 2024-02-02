<?php
include_once 'dbmenu_config.php';
include_once 'MenuItem.php';

if (isset($_GET['category'])) {
    $category = $_GET['category'];

    
    $databaseConnection = new DatabaseConnection();
    $conn = $databaseConnection->startConnection();

    try {
        $stmt = $conn->prepare("SELECT * FROM menuitems WHERE category = :category");
        $stmt->bindParam(':category', $category);
        $stmt->execute();
        $filteredItemsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        
        $filteredItems = array_map(function ($item) {
            return new MenuItem($item['name'], $item['image_path'], $item['category']);
        }, $filteredItemsData);

            foreach ($filteredItems as $item) {
            echo '<div class="food-item ' . strtolower($item->getCategory()) . '">';
            echo '<img src="menuFotot/' . basename($item->getImagePath()) . '" alt="' . $item->getName() . '">';
            echo '<p>' . $item->getName() . '</p>';
            echo '</div>';
        }
    } catch (PDOException $e) {
        echo "Error fetching filtered items: " . $e->getMessage();
    }
}
?>
