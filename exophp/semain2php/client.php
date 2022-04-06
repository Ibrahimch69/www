<?php 



class client {
    public $adresse;
    function __construct($adresse) {
        $this->adresse = $adresse;
    }
    function set_coordoné($adresse){
        $this->adresse = $adresse;
    }
    function getCoordonnee() {
        return $this->adresse;
    }
}