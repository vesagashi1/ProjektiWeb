<?php
include_once 'dbmenu_config.php';
include_once 'MenuItem.php';


$databaseConnection = new DatabaseConnection();
$conn = $databaseConnection->startConnection();

try {
    $stmt = $conn->prepare("SELECT * FROM menuitems");
    $stmt->execute();
    $menuItemsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    $menuItems = array_map(function ($item) {
        return new MenuItem($item['name'], $item['image_path'], $item['category']);
    }, $menuItemsData);
} catch (PDOException $e) {
    echo "Error fetching menu items: " . $e->getMessage();
    exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sage & Salt</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="index.php">
    <script src="app.js"></script>
</head>
<body>
    <header>
        <div class="headeri">
            <h1 class="emri">Sage & Salt</h1>
            <div class="linkk">
                <a class="linqet" href="index.php">Home</a>
                <a class="linqet scroll-link" href="aboutUs.php">About Us</a>
                <a class="linqet" href="">Menu</a>
                <a class="linqet scroll-link" href="index.php#contact-section">Contact Us</a>
                <a class="linqet" href="register.php">Register</a>
            </div>
        </div>
    </header>

    <nav>
        <button onclick="showCategory('breakfast')">Breakfast</button>
        <button onclick="showCategory('brunch')">Brunch</button>
        <button onclick="showCategory('lunch')">Lunch</button>
        <button onclick="showCategory('dinner')">Dinner</button>
    </nav>

    <div class="food-menu" id="food-menu">
        <?php
        
        foreach ($menuItems as $menuItem) {
            echo '<div class="food-item">';
            echo '<img src="menuFotot/' . basename($menuItem->getImagePath()) . '" alt="' . $menuItem->getName() . '">';
            echo '<p>' . $menuItem->getName() . '</p>';
            echo '</div>';
        }
        ?>
    </div>

    <script>
       
        function showCategory(category) {
            
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('food-menu').innerHTML = xhr.responseText;
                }
            };

            var url = 'get_filtered_items.php?category=' + category;
            xhr.open('GET', url, true);
            xhr.send();
        }
    </script>

    

</div>
   
</body>
</html>