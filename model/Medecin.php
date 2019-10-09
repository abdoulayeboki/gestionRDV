<?php
class Medecin extends Utilisateur{
 
    public function __construct($idSpecialite) {
        parent();
        $this->niveauStatut=1;
        ;
    }
}