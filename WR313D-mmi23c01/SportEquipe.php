<?php
require_once 'Sport.php';

class SportEquipe extends Sport {
    protected int $nbSportif;

    public function __construct(string $intitule, int $nbSportif) {
        parent::__construct($intitule, false);
        $this->nbSportif = $nbSportif; 
    }

    public function afficher(): string {
        return "Sport collectif : {$this->intitule}, Nb de sportifs : {$this->nbSportif}";
    }
}
?>
