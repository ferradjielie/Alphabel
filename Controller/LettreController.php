<?php
 
 namespace Controller;
use Model\Connect ;

class   LettreController {

    public function DetailLettres ($id) {
        $pdo = Connect::seConnecter();
        $requeteDetailLettre= $pdo -> prepare("SELECT nomLettre,  descriptionLettre 
             FROM feuille
             INNER JOIN lettre
             ON lettre.id_lettre = feuille.id_lettre
             WHERE lettre.id_lettre = :id");
             $requeteDetailLettre->execute(["id" => $id]);


             require "view/detailLettres.php";
}
}