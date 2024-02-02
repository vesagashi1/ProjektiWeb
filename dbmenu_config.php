<?php
class DatabaseConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "menu_modify";
    private $conn;

    public function startConnection() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed " . $e->getMessage();
            return null;
        }
    }

    public function addMenuItem(MenuItem $menuItem) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO menuitems (name, image_path, category) VALUES (?, ?, ?)");
            $stmt->execute([$menuItem->getName(), $menuItem->getImagePath(), $menuItem->getCategory()]);
            return true;
        } catch (PDOException $e) {
            echo "Error adding menu item: " . $e->getMessage();
            return false;
        }
    }

    public function deleteMenuItem($item_id) {
        try {
            
            $stmt = $this->conn->prepare("DELETE FROM menuitems WHERE id = :item_id");
            $stmt->bindParam(':item_id', $item_id);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function editMenuItem($item_id, $new_name, $new_image_path, $new_category) {
        try {
            $stmt = $this->conn->prepare("UPDATE menuitems SET name = ?, image_path = ?, category = ? WHERE id = ?");
            $stmt->execute([$new_name, $new_image_path, $new_category, $item_id]);
            return true;
        } catch (PDOException $e) {
            echo "Error editing menu item: " . $e->getMessage();
            return false;
        }
    }

    public function getAllMenuItems() {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM menuitems");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching all menu items: " . $e->getMessage();
            return false;
        }
    }
}
?>
