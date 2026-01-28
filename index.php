<?php

class Vehicule {

    public $marque;
    public $prix;

    public function afficherInfo(){
        return "la marque est : " . $this->marque . " et le prix est : " . $this->prix;
    }

}

class Terrestre extends Vehicule {

    public $nbRoue;

}

class Marin extends Vehicule {

    public $typeCoque;

}

class Voiture extends Terrestre {

    public $clim;

}

class Moto extends Terrestre {

    public $typeGuidon;

}

class Bateau extends Marin {

    public $nbVoiles

}

class SousMarin extends Marin {

    public $profondeurMax;

}