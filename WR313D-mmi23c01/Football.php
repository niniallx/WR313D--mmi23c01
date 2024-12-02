<?php
require_once 'SportEquipe.php';
require_once 'FootballInterface.php';

class Football extends SportEquipe implements FootballInterface {
    private string $nomEquipe;
    private array $joueurs = [];

    public function __construct(string $nomEquipe) {
        parent::__construct('Football', 11);
        $this->nomEquipe = $nomEquipe;
    }

    public function afficher(): string {
        return "Équipe : {$this->nomEquipe}, Joueurs : " . count($this->joueurs);
    }

    public function addJoueur($joueur): void {
        if ($joueur instanceof Joueur && !in_array($joueur, $this->joueurs, true)) {
            $this->joueurs[] = $joueur;
        }
    }

    public function supprimerJoueur($joueur): void {
        if ($joueur instanceof Joueur) {
            $this->joueurs = array_filter($this->joueurs, fn($j) => $j !== $joueur);
        }
    }

    public function modifierPosteJoueur($nom, $poste): void {
        foreach ($this->joueurs as $joueur) {
            if ($joueur instanceof Joueur && $joueur->getNom() === $nom) {
                $joueur->setPoste($poste);
                break;
            }
        }
    }
}
?>
