<?php

    // la classe "Category" rappresenta la categoria del prodotto ovvero Cani e Gatti
    class Category {

        // dichiarazione della variabile privata; incapsulamento
        private $name;
        private $icon;

        // costruttore della classe
        public function __construct($name, $icon) {
        
            $this->name = $name;
            $this->icon = $icon;
        }
        
        // metodo get per settare il nome della categoria
        public function getName() {
            return $this->name;
        }

        public function getIcon() {
            return $this->icon;
        }
    };

?>