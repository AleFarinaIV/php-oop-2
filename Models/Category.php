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

?>