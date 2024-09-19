<?php

    include_once  __DIR__.'/Category.php';


    class Product {
    
        // dichiarazione delle variabili private; incapsulamento
        private $image;
        private $title;
        private $price;
        private $category; // associazione con la classe "Category"
    
        // costruttore della classe
        public function __construct($image, $title, $price, Category $category) {
            
            $this->image = $image;
            $this->title = $title;
            try {
                if (!is_numeric($price)) {
                    throw new Exception('Prezzo non valido');
                }
                $this->price = $price . '$';
            } catch(Exception $e) {
                $this->price = $e->getMessage();
            }
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
    
        public function getCategory() {
            return $this->category;
        }
    }

?>