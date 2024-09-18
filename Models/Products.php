<?php

    include_once  __DIR__.'/Category.php';


    class Product {
    
        // dichiarazione delle variabili private; incapsulamento
        private $image;
        private $title;
        private $price;
        private $icon;
        private $category; // associazione con la classe "Category"
    
        // costruttore della classe
        public function __construct($image, $title, $price, $icon, Category $category) {
            
            $this->image = $image;
            $this->title = $title;
            $this->price = $price;
            $this->icon = $icon;
            $this->category = $category;
        }
    
        // metodi get
        public function getImage() {
            return $this->image;
        }
    
        public function getTitle() {
            return $this->title;
        }
        
        public function getPrice() {
            return $this->price;
        }
    
        public function getIcon() {
            return $this->icon;
        }
    
        public function getCategory() {
            return $this->category->getName();
        }
    }

?>