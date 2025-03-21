<?php

class Abonnement // Classe Parent
{
    public $utilisateur; // Nom de l'abonné
    public $prixMensuel; // prix en euros de l'abonnement
    public $dateDebut; // date de début de l'abonnement, format DateTime
    public bool $estActif; // booléen indiquant si l'abonnement est actif ou non 

    public function __construct($utilisateur, $prixMensuel, $dateDebut, $estActif)
    {
        $this->utilisateur = $utilisateur;
        $this->prixMensuel = $prixMensuel;
        $this->dateDebut = $dateDebut;
        $dateDebut = new DateTime;
        $this->estActif = $estActif;
    }
    



    public function getterUtilisateur() {
        return $this->utilisateur;
    }
    public function setterUtilisateur($utilisateur) {
        $this->utilisateur = $utilisateur;
    }




    public function getterPrixMensuel() {
        return $this->prixMensuel;
    }
    public function setterPrixMensuel($prixMensuel) {
        $this->prixMensuel = $prixMensuel;
    }




    public function getterDateDebut() {
        return $this->dateDebut;
    }
    public function setterDateDebut(DateTime $dateDebut) {
        $this->dateDebut = $dateDebut;
    }




    public function getterEstActif() {
        return $this->estActif;
    }
    public function setterEstActif($estActif) {
        $this->estActif = $estActif;
    }




    public function activer() //  Active l’abonnement 
    {
        $this->estActif = true;
    }
    public function resilier() // Résilie l’abonnement (désactive et met estActif à false) 
    {
        $this->estActif = false;
    }
    public function calculerCout(int $mois) // Retourne le coût total sur une période donnée 
    {
        echo $mois * $this->prixMensuel;
    }
    public function afficherDetails() // Retourne une chaîne formatée avec les détails de l’abonnement 
    {
        echo 'abonnement de ' . $utilisateur . ' qui coute ' . $prixMensuel . '.';
                if ( $estActif)
                echo ' Actif depuis ' . $dateDebut . '.';
    }
}

$dateDebut = new DateTime('2025-01-01');
$abo1 = new Abonnement('Imran', 30, $dateDebut); // abonnement de imran 30 € et commence le 01/01/2025
$abo1->activer(); // on commence l'abonnement
$abo1->resilier(); // on resilie l'abonnement 
$abo1->calculerCout(2); // 2 fois 30 pour 2 mois d'abonnement 





class AbonnementPremium extends Abonnement {

    private $reduction; // reduc sur le prix mensuel 
    public function __construct($utilisateur, $prixMensuel, DateTime $dateDebut, $reduction)
    {
     parent::__construct($utilisateur, $prixMensuel, $dateDebut);
        $this->reduction = $reduction; 
    }
    public function getterReduction() {
        return $this->reduction;
    }
        public function setterReduction($reduction) {
            $this->reduction = $reduction;
        }
}



?>