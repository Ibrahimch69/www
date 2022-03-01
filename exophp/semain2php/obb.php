<?php

    //Créez une classe représentant une personne. Elle déclare les propriétés nom et prénom et un constructeur.
    class Personne {
        // Properties
        public $nom;
        public $prenom;
        // Methods
        function __construct($nom, $prenom) {
            $this->nom = $nom;
            $this->prenom = $prenom;
        }
        function setNom($nom) {
            $this->nom = $nom;
        }
        function getNom() {
            return $this->nom;
        }
        function setPrenom($prenom) {
            $this->prenom = $prenom;
        }
        function getPrenom() {
            return $this->prenom;
        }
    }

$idris = new Personne("", "");
 /* 	
$apple = new personne("","");
$apple->set_nom('chergui');
$apple->set_prenom('ibrahim'); 
echo "Name: " . $apple->get_nom();
echo "<br>";
echo "prenom: ". $apple->get_prenom();*/

