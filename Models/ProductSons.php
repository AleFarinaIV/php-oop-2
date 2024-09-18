<?php

    include_once __DIR__.'/Products.php';

    // creazione di classi "figlie" di "Product"
    // lasciamo le genericità ed entriamo nello specifico
    class Toys extends Product {
        private $typeOfMaterial;

        // costruttore della classe "Toys"
        public function __construct($image, $title, $price, $icon, Category $category, $typeOfMaterial)
        {
            parent::__construct($image, $title, $price, $icon, $category); // eredita le variabili dalla classe genitore e aggiunge la sua specificità
            $this->typeOfMaterial = $typeOfMaterial;
        }

        // metodo get per settare il tipo di materiale
        public function getTypeOfMaterial() {
            return $this->typeOfMaterial;
        }
    }


    class Food extends Product {
        private $typeOfFood;
        private $quantity;

        // costruttore della classe "Food"
        public function __construct($image, $title, $price, $icon, Category $category, $typeOfFood, $quantity) {
            parent::__construct($image, $title, $price, $icon, $category); // eredita le variabili dalla classe genitore e aggiunge le sue specificità
            $this->typeOfFood = $typeOfFood;
            $this->quantity = $quantity;
        }

        // metodi get per settare il tipo di cibo e la quantità
        public function getTypeOfFood() {
            return $this->typeOfFood;
        }
        
        public function getQuantity() {
            return $this->quantity;
        }
    }


    class Animal_beds extends Product {
        private $size;
        private $color;

        // costruttore della classe "Animal_beds"
        public function __construct($image, $title, $price, $icon, Category $category, $size, $color) {
            parent::__construct($image, $title, $price, $icon, $category); // eredita le variabili dalla classe genitore e aggiunge le sue specificità
            $this->size = $size;
            $this->color = $color;
        }

        // metodi get per settare la dimensione e il colore
        public function getSize() {
            return $this->size;
        }

        public function getColor() {
            return $this->color;
        }
    }

?>