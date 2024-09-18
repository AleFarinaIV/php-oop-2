<?php

    include __DIR__.'/../Models/Category.php';
    include __DIR__.'/../Models/Products.php';
    include __DIR__.'/../Models/ProductSons.php';


    // creazione d'istanze della classe "Category"
    $dogs_category = new Category("Dogs");
    $cats_category = new Category("Cats");
    $generic_category = new Category("Generic");

    // creazione d'istanze della classe "Product"
    $product1 = new Product("https://placehold.co/800x600?text=Generic+Product", "Product: Fur Brush", 15.00, "toy_bone.png", $generic_category);
    $product2 = new Product("https://placehold.co/800x600?text=Generic+Product", "Product: Collar", 9.00, "can_of_tuna.png", $generic_category);

    // creazione d'istanze della classe "Toys"
    $toy1 = new Toys("https://placehold.co/800x600?text=Giocattolo+con+orologio", "Toy: Toy Bone", 25.00, "watch_with_clock.png", $dogs_category, "Plastic");
    $toy2 = new Toys("https://placehold.co/800x600?text=Giocattolo+con+colletto", "Toy: Ball of wool", 10.00, "collar.png", $dogs_category, "Wool");

    // creazione d'istanze della classe "Food"
    $food1 = new Food("https://placehold.co/800x600?text=Cani+che+mangiano", "Food: Canine Food", 4.99, "canine_food.png", $dogs_category, "Meat", 300);
    $food2 = new Food("https://placehold.co/800x600?text=Gatti+che+mangiano", "Food: Can of Tuna", 6.99, "cat_food.png", $cats_category, "Fish", 150);

    // creazione d'istanze della classe "Animal_beds"
    $bed1 = new Animal_beds("https://placehold.co/800x600?text=Cuccia+per+cani", "Kennel: Dog Bed", 39.99, "dog_bed.png", $dogs_category, "Large", "Brown");
    $bed2 = new Animal_beds("https://placehold.co/800x600?text=Casetta+per+gatti", "Kennel: Cat House", 30.99, "cat_house.png", $cats_category, "Medium", "Lightgrey");

    $instancesArray = [$product1, $product2, $toy1, $toy2, $food1, $food2, $bed1, $bed2];

    $randomKeys = shuffle($instancesArray);
?>