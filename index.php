<?php

    // la classe "Category" rappresenta la categoria del prodotto ovvero Cani e Gatti
    class Category {

        // dichiarazione della variabile privata; incapsulamento
        private $name;

        // costruttore della classe
        public function __construct($name) {
        
            $this->name = $name;
        }
        
        // metodo get per settare il nome della categoria
        public function getName() {
            return $this->name;
        }
    };

    // creazione d'istanze della classe "Category"
    $dogs_category = new Category("Dogs");
    $cats_category = new Category("Cats");

    var_dump($dogs_category);
    var_dump($cats_category);

    //la classe "Product" rappresenta un prodotto generico; ereditarietà: classe genitore
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

        public function getCatgeory() {
            return $this->category->getName();
        }
    }

    // creazione d'istanze della classe "Product"
    $product1 = new Product("https://placehold.co/600x400?text=Osso+giocattolo", "Toy Bone", 15.00, "toy_bone.png", $dogs_category);
    $product2 = new Product("https://placehold.co/600x400?text=Gatti+che+mangiano", "Can of Tuna", 9.00, "can_of_tuna.png", $cats_category);

    var_dump($product1);
    var_dump($product2);

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

    // creazione d'istanze della classe "Toys"
    $toy1 = new Toys("https://placehold.co/600x400?text=Giocattolo+con+orologio", "Watch with Clock", 25.00, "watch_with_clock.png", $dogs_category, "Leather");
    $toy2 = new Toys("https://placehold.co/600x400?text=Giocattolo+con+colletto", "Collar", 10.00, "collar.png", $dogs_category, "Plastic");

    var_dump($toy1);
    var_dump($toy2);

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

    // creazione d'istanze della classe "Food"
    $food1 = new Food("https://placehold.co/600x400?text=Cani+che+mangiano", "Canine Food", 4.99, "canine_food.png", $dogs_category, "Meat", 300);
    $food2 = new Food("https://placehold.co/600x400?text=Gatti+che+mangiano", "Cat Food", 6.99, "cat_food.png", $cats_category, "Fish", 150);

    var_dump($food1);
    var_dump($food2);

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

    // creazione d'istanze della classe "Animal_beds"
    $bed1 = new Animal_beds("https://placehold.co/600x400?text=Cuccia+per+cani", "Dog Bed", 39.99, "dog_bed.png", $dogs_category, "Large", "Brown");
    $bed2 = new Animal_beds("https://placehold.co/600x400?text=Casetta+per+gatti", "Cat House", 30.99, "cat_house.png", $cats_category, "Medium", "Lightgrey");

    var_dump($bed1);
    var_dump($bed2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Animals Shop</title>
</head>

<body>

</body>

</html>