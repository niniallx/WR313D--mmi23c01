<?php
class Joueur {
    private string $nom; 
    private string $prenom;
    private string $poste;

    public function __construct(string $nom, string $prenom, string $poste) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->poste = $poste; 
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setPoste(string $poste): void {
        $this->poste = $poste; 
    }

    public function sePresente(): string {
        return "Je suis {$this->prenom} {$this->nom}, poste : {$this->poste}";
    }
}
?>
