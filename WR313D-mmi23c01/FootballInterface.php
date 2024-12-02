<?php
/**
 * Created by PhpStorm.
 * User: davidannebicque
 * Date: 11/12/2017
 * Time: 16:27
 */

interface FootballInterface
{

    public function afficher();
    public function addJoueur($joueur);
    public function modifierPosteJoueur($nom, $poste);
    public function supprimerJoueur($nom); //Permet de supprimer le joueur $nom du tableau de joueur

}
