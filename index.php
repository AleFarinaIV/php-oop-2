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