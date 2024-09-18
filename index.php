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

    //la classe "Product" rappresenta un prodotto generico
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
    $product1 = new Product("dog_with_toy.jpg", "Toy Bone", 15.00, "toy_bone.png", $dogs_category);
    $product2 = new Product("cats_eating.jpg", "Can of Tuna", 9.00, "can_of_tuna.png", $cats_category);

    var_dump($product1);
    var_dump($product2);

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