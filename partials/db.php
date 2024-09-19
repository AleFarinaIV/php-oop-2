<?php

    include __DIR__.'/../Models/Category.php';
    include __DIR__.'/../Models/Products.php';
    include __DIR__.'/../Models/ProductSons.php';


    // creazione d'istanze della classe "Category"
    $dogs_category = new Category("Dogs", '<i class="fa-solid fa-dog"></i>');
    $cats_category = new Category("Cats", '<i class="fa-solid fa-cat"></i>');
    $generic_category = new Category("Generic", '<i class="fa-solid fa-paw"></i>');

    // creazione d'istanze della classe "Product"
    $product1 = new Product("https://picsum.photos/800/600", "Product: Fur Brush", 15.00, $generic_category);
    $product2 = new Product("https://picsum.photos/800/600", "Product: Collar", 9.00, $generic_category);

    // creazione d'istanze della classe "Toys"
    $toy1 = new Toys("https://picsum.photos/800/600", "Toy: Toy Bone", 25.00, $dogs_category, "Plastic");
    $toy2 = new Toys("https://picsum.photos/800/600", "Toy: Ball of wool", 10.00, $dogs_category, "Wool");

    // creazione d'istanze della classe "Food"
    $food1 = new Food("https://picsum.photos/800/600", "Food: Canine Food", 4.99, $dogs_category, "Meat", 300);
    $food2 = new Food("https://picsum.photos/800/600", "Food: Can of Tuna", 6.99, $cats_category, "Fish", 150);

    // creazione d'istanze della classe "Animal_beds"
    $bed1 = new Animal_beds("https://picsum.photos/800/600", "Kennel: Dog Bed", 39.9, $dogs_category, "Large", "Brown");
    $bed2 = new Animal_beds("https://picsum.photos/800/600", "Kennel: Cat House", 30.99, $cats_category, "Medium", "Lightgrey");

    $instancesArray = [$product1, $product2, $toy1, $toy2, $food1, $food2, $bed1, $bed2];

    $randomKeys = shuffle($instancesArray);
?>