<?php
class MenuItem {
    private $name;
    private $imagePath;
    private $category;

    public function __construct($name, $imagePath, $category) {
        $this->name = $name;
        $this->imagePath = $imagePath;
        $this->category = $category;
    }

        public function getName() {
        return $this->name;
    }

    public function getImagePath() {
        return $this->imagePath;
    }

    public function getCategory() {
        return $this->category;
    }
}
?>
