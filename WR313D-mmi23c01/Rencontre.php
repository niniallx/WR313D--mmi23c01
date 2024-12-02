<?php
require_once 'Football.php';

class Rencontre {
    private Football $equipe1;
    private Football $equipe2;
    private DateTime $dateRencontre;
    private ?Football $equipeGagnante = null; 
    private int $scoreEquipe1 = 0;
    private int $scoreEquipe2 = 0;

    public function __construct(Football $equipe1, Football $equipe2, DateTime $dateRencontre) {
        $this->equipe1 = $equipe1;
        $this->equipe2 = $equipe2;
        $this->dateRencontre = $dateRencontre;
    }

    public function jouerMatch(): void {
        $this->scoreEquipe1 = rand(0, 5); 
        $this->scoreEquipe2 = rand(0, 5);
        $this->equipeGagnante = $this->scoreEquipe1 > $this->scoreEquipe2 ? $this->equipe1 : $this->equipe2;
    }

    public function afficher(): string {
        $resultat = "{$this->equipe1->afficher()} vs {$this->equipe2->afficher()} le {$this->dateRencontre->format('Y-m-d')}";
        $resultat .= "\nScore : {$this->scoreEquipe1} - {$this->scoreEquipe2}";
        $resultat .= $this->equipeGagnante ? "\nGagnant : " . $this->equipeGagnante->afficher() : "\nMatch nul";
        return $resultat;
    }
}
?>
